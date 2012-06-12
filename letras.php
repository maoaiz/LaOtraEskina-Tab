<div class="letrac">
<?php
include_once "config.php";
/*
if($_GET['l']==0)
	$pos = $_GET['l'];
else $pos = $_GET['l'] -1;*/
$pos = $_GET['l'];
echo "<center><b>".$letras[$pos]['nombre']."</b></center><br>";
echo "<pre>";
echo $letras[$pos]['letra'];
echo "</pre>";
?>
</div>
