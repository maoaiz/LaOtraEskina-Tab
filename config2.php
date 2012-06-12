<?php
//$url = "http://mauricioaizaga.com/LaOtraEskina/";/*Cambiar este link dependiendo del servidor en que se encuentre alojado*/
$url="";
$titulo = "La Otra Eskina > ".$musico;
$page="http://www.facebook.com/pages/La-Otra/237090246315378?sk=app_161408067264807";
$integrantes= array(//fotos pequeñas para seleccionar en la pestaña Integrantes
	"elider"	=> $url."img/bordes/elider.jpg",
	"daniel"	=> $url."img/bordes/daniel.jpg",
	"wilmar"	=> $url."img/bordes/wilmar.jpg",
	"gordon"	=> $url."img/bordes/gordon.jpg",
	"clavijo"	=> $url."img/bordes/pipe.jpg",
	"raul"		=> $url."img/bordes/raul.jpg",
);
$fotos= array(//fotos del menú (scrollable) de integrantes
	"elider"=> $url."img/bordes/elider-nom.jpg",
	"daniel"=> $url."img/bordes/daniel-nom.jpg",
	"wilmar"=> $url."img/bordes/wilmar-nom.jpg",
	"gordon"=> $url."img/bordes/gordon-nom.jpg",
	"clavijo"=> $url."img/bordes/pipe-nom.jpg",
	"raul"=> $url."img/bordes/raul-nom.jpg",
);

$videos = array(
	array("num"=>"1","nombre"=>"Contigo","code"=>"sgoX7qhGSi8"),
	array("num"=>"2","nombre"=>"Solo y Perdido","code"=>"TSsjHQyEZzE"),
	array("num"=>"3","nombre"=>"Segundo plato","code"=>"etHDJT1UVvI"),
	array("num"=>"4","nombre"=>"Miedos","code"=>"SuXkBblg8Bk"),
	array("num"=>"5","nombre"=>"Guaskatronik 1","code"=>"noOjveouUHM")
);

$canciones = array(
	array ("num"=>"1","nombre"=>"Contigo","href"=>$url."music/songs/La_Otra_Eskina-Contigo.mp3"),
	array ("num"=>"2","nombre"=>"Contigo","href"=>$url."music/songs/La_Otra_Eskina-Miedos.mp3"),
	array ("num"=>"3","nombre"=>"Contigo","href"=>$url."music/songs/La_Otra_Eskina-LA_PENA.mp3"),
	array ("num"=>"4","nombre"=>"Contigo","href"=>$url."music/songs/Guascatronik-2.mp3"),
	array ("num"=>"5","nombre"=>"Contigo","href"=>$url."music/songs/Guascatronik-3.mp3")
);
?>
