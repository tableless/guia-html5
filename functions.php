<?
include('colorizer.php');

function Example($name){
  global $chapter;
  ?>
  <div class="example">
  <h4><a href="exemplos/<?=$chapter?>/<?=$name?>.html">Arquivo: exemplos/<?=$chapter?>/<?=$name?>.html</a></h4>
  <pre><code><?=color("exemplos/$chapter/$name.html")?></code></pre>
  </div>
  <?
}

$lastchapter=25;

?>
