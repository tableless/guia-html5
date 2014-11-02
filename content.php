<?

include("functions.php");
$chapter=$_GET['c'];
include("chapter$chapter.php");

?>
<h1><?=$title?></h1>
<?content()?>

