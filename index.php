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

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="author" href="http://tableless.com.br/" />
<link rel="index" href="?chapter=0" />
<link rel="home" href="?chapter=0" />
<link rel="up" href=".." />
<link rel="first" href="?chapter=1" />
<link rel="next" href="?chapter=<?=$chapter+1?>" />
<link rel="prev" href="?chapter=<?=$chapter-1?>" />
<link rel="last" href="?chapter=<?=$lastchapter?>" />

</head>
<body id="chapter<?=$chapter-1?>">
<header>
<div class="limite">
    <a href="print.php" class="lnkprint">Versão Impressão</a>
	<h1>HTML5</h1>
	<h2>Um guia de referência para os desenvolvedores web.</h2>
	<h3 class="logo logotableless"><a href="http://tableless.com.br/">Tableless - Padrões Web na ponta da língua</a></h3>
</div>
</header>
<nav id="navbar">
<?if($chapter>1){?><a href="?chapter=<?=$chapter-1?>">&laquo; anterior</a><?}?>
| <a href=".">índice</a> |
<?if($chapter<$lastchapter){?><a href="?chapter=<?=$chapter+1?>">próximo &raquo;</a><?}?>
</nav>
<article>
	<h1 id="tit<?=$chapter?>"><?if($chapter>0){?><?=$chapter?>. <?}?><?=$title?></h1>
  <?content()?>
</article>
<nav id="navbar">
<?if($chapter>1){?><a href="?chapter=<?=$chapter-1?>">&laquo; anterior</a><?}?>
| <a href=".">índice</a> |
<?if($chapter<$lastchapter){?><a href="?chapter=<?=$chapter+1?>">próximo &raquo;</a><?}?>
</nav>

<footer>
<div class="limite">
	<h1 class="logo logotableless"><a href="http://tableless.com.br/">Tableless - Padrões Web na ponta da língua</a></h1>
</div>
</footer>



<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-335027-1']);
_gaq.push(['_trackPageview']);
//_gaq.push(['_trackSocial', network, socialAction, opt_target, opt_pagePath]);


(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
</body>
</html>
