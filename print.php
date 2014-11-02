<?
include('functions.php');

$chapter=0;
if(isset($_GET['chapter'])){
  $chapter=intval($_GET['chapter']);
}
require("chapter$chapter.php");

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<title><?=$title?></title>

<?/*<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />*/?>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print, screen">
<link rel="author" href="http://visie.com.br/" />
<link rel="index" href="?chapter=0" />
<link rel="home" href="?chapter=0" />
<link rel="up" href=".." />
</head>
<body>
<header>
<div class="limite">	
	<h1>HTML5</h1>
	<h2>Um guia de referência para os desenvolvedores web.</h2>
	<h3 class="logo logotableless"><a href="http://tableless.com.br/">Tableless - Padrões Web na ponta da língua</a></h3>
	<h3 class="logo logovisie"><a href="http://visie.com.br/">Visie - Desenvolvimento de sistemas web</a></h3>
</div>
</header>

<article>
  <?
  $url="http://$_SERVER[SERVER_NAME]$_SERVER[SCRIPT_NAME]?c=";
  $url=str_replace('print','content',$url);
  ?>
	<?for($c=0;$c<=$lastchapter;$c++){?>
  <?echo file_get_contents("$url$c");?>
  <?}?>
</article>

<footer>
<div class="limite">
	<h1 class="logo logotableless"><a href="http://tableless.com.br/">Tableless - Padrões Web na ponta da língua</a></h1>
	<h1 class="logo logovisie"><a href="http://visie.com.br/">Visie - Desenvolvimento de sistemas web</a></h1>
</div>
</footer>

</body>
</html>
