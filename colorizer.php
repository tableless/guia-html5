<?

require_once('geshi/geshi.php');

class HTMLcolorizer{
    private $pointer = 0; //Cursor position.
    private $content = null; //content of document.
    private $colorized = null;
    private $inscript = false;
    private $instyle = false;
    function __construct($content){
        $this->content = $content;
    }
    function colorComment($position){
        $buffer = "&lt;<span class='HTMLComment'>";
        for($position+=1;$position < strlen($this->content) && $this->content[$position] != ">" ;$position++){
            $buffer.= $this->content[$position];
        }
        $buffer .= "</span>&gt;";
        $this->colorized .= $buffer;
        return $position;
    }
    function colorTag($position){
        $buffer = "&lt;<span class='tagName'>";
        $coloredTagName = false;
        //As long as we're in the tag scope
        for($position+=1;$position < strlen($this->content) && $this->content[$position] != ">" ;$position++){
            if($this->content[$position] == " " && !$coloredTagName){
                $tagName=substr($buffer,26);
                if($tagName=="script")$this->inscript=true;
                if($tagName=="style")$this->instyle=true;
                $coloredTagName = true;
                $buffer.="</span>";
            }else if($this->content[$position] != " " && $coloredTagName){
                //Expect attribute
                $attribute = "";
                //While we're in the tag
                for(;$position < strlen($this->content) && $this->content[$position] != ">" ;$position++){
                    if($this->content[$position] != "="){
                        $attribute .= $this->content[$position];
                    }else{
                        $value="";
                        $buffer .= "<span class='tagAttribute'>".$attribute."</span>=";
                        $attribute = ""; //initialize it
                        $inQuote = false;
                        $QuoteType = null;
                        for($position+=1;$position < strlen($this->content) && $this->content[$position] != ">" && $this->content[$position] != " "  ;$position++){
                            if($this->content[$position] == '"' || $this->content[$position] == "'"){
                                $inQuote = true;
                                $QuoteType = $this->content[$position];
                                $value.=$QuoteType;
                                //Read Until next quotation mark.
                                for($position+=1;$position < strlen($this->content) && $this->content[$position] != ">" && $this->content[$position] != $QuoteType  ;$position++){
                                    $value .= $this->content[$position];
                                }   
                                $value.=$QuoteType;
                            }else{//No Quotation marks.
                                $value .= $this->content[$position];
                            }                           
                        }
                        $buffer .= "<span class='tagValue'>".$value."</span>";
                        break;           
                    }
                   
                }
                if($attribute != ""){$buffer.="<span class='tagAttribute'>".$attribute."</span>";}
            }
            if($this->content[$position] == ">" ){break;}else{$buffer.= $this->content[$position];}
           
        }
        //In case there were no attributes.
        if($this->content[$position] == ">" && !$coloredTagName){
            $tagName=substr($buffer,26);
            if($tagName=="script")$this->inscript=true;
            if($tagName=="style")$this->instyle=true;
            $buffer.="</span>&gt;";
            $position++;
        }
        $this->colorized .= $buffer;
        return --$position;
    }
    function colorize(){
        $this->colorized="";
        $inTag = false;
        for($pointer = 0;$pointer<strlen($this->content);$pointer++){
            $thisChar = $this->content[$pointer];
            $nextChar = @$this->content[$pointer+1];
            if($thisChar == "<"){
                if($nextChar == "!"){
                    $pointer = $this->colorComment($pointer);
                }else if($nextChar == "?"){
                    //colorPHP();
                }else{
                    $pointer = $this->colorTag($pointer);
                    if($this->inscript){
                      $pointer=$this->colorOther('javascript','script',$pointer);
                    }elseif($this->instyle){
                      $pointer=$this->colorOther('css','style',$pointer);
                    }
                    $this->inscript=0;
                    $this->instyle=0;
                }
            }else{
                $this->colorized .= $this->content[$pointer];
            }
        }
        return $this->colorized;
    }

    function colorOther($lang,$tag,$pointer){
      $buffer=substr($this->content,$pointer+1);
      $buffer=split("</$tag>",$buffer);
      $buffer=$buffer[0];
      if($buffer[0]=='>'){
        $pointer++;
        $buffer=substr($buffer,1);
        $this->colorized.='>';
      }
      if($buffer[0]=='')return $pointer;
      $pointer+=strlen($buffer);
      $g=str_replace('<br />','',geshi_highlight($buffer,$lang,null,true));
      if(substr($g,-13)=='&nbsp;</code>')$g=substr($g,0,-13).'</code>';
      $this->colorized.=$g;
      return $pointer;
    }

}

function color($f){
  $t=file_get_contents($f);
  $t=str_replace('&','&amp;',$t);
  $HTMLinspector = new HTMLcolorizer($t);
  $document = $HTMLinspector->colorize();
  $document=preg_replace("/<span class='tagAttribute'>on/","<span class='tagAttribute on'>on",$document);
  $document=preg_replace("/<span class='tagAttribute'>\\non/","<span class='tagAttribute on'>\non",$document);
  $document=split("\n",$document);
  if($document[sizeof($document)-1]=='')array_pop($document);
  $return='';
  for($i=0;$i<sizeof($document);$i++){
    $l=$i+1;
    if($l<10){
      $l="  $l";
    }elseif($l<100){
      $l=" $l";
    }
    $return.="<div class='zebra".($i%2)."'><span class='line'>$l</span> ".$document[$i]."</div>";
  }
  return $return;
}


?>
