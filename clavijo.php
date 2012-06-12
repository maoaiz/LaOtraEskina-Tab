<?php
$musico ="Pipe Clavijo";
include_once "config.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php include_once "cabecera.php";?>
</head>
<body>
	<?php include_once "facebook_connect.php"; ?>
	<div class="main">
		
		<div class="content dos">
			<div class="grande">
				<div class="menubox">
					<div class="logo1">
						<a href="http://laotraeskina.com" target="_blank"><img src="img/home2.png" width="110px"/></a>
					</div>
					<?php include_once "menu.html"; ?>
					<?php include_once "share.php"; ?>
				</div>
				<div class="contenido">
					<div class="integrantes">
						<!---->
			<div class="slider">
				<a class="prev left"></a>
				<div class="scrollable">
					<div class="items">
						<div><a href="gordon.php"><img src="<?=$fotos['gordon']?>"></a></div>
						<div><a href="clavijo.php"  class="on"><img src="<?=$fotos['clavijo']?>"></a></div>
						<div><a href="raul.php"><img src="<?=$fotos['raul']?>"></a></div>
						<div><a href="elider.php"><img src="<?=$fotos['elider']?>"></a></div>
						<div><a href="daniel.php"><img src="<?=$fotos['daniel']?>"></a></div>
						<div><a href="wilmar.php"><img src="<?=$fotos['wilmar']?>"></a></div>
					</div>
				</div>
				<a class="next right"></a>
			</div>
			<!---->
			<!--Fotos-->
			<div id="slideshow">
				<ul id="nav">
					<li id="prev"><a href="#">Previous</a></li>
					<li id="next"><a href="#">Next</a></li>
				</ul>
				<ul id="slides">
					<li><div class="info"><?=$musico?><a href="https://www.facebook.com/pipecla88" target="_blank" ><span class="face"></span></a></div>
						<img src="img/muchachos/clavijo1.jpg"  />
					</li>
					<li><div class="info" ><?=$musico?><a href="https://www.facebook.com/pipecla88" target="_blank" ><span class="face"></span></a></div>
						<img src="img/muchachos/clavijo3.jpg" />
					</li>
					<li><div class="info" ><?=$musico?><a href="https://www.facebook.com/pipecla88" target="_blank" ><span class="face"></span></a></div>
						<img src="img/muchachos/clavijo2.jpg" />
					</li>
				</ul>
			</div>
			<!--/fotos-->
			<div class="bio">
			Andrés Felipe Clavijo Ramírez nace en Pereira el 1 de enero de 1988 y comienza su carrera musical como guitarrista a la edad de 15 años.<br>A pesar de su tardía incursión en las artes musicales muestra un notorio empeño por lograr un sonido óptimo en su instrumento y un repertorio musical en constante crecimiento. <a class="mas_info" href="http://laotraeskina.com/blog/index.php/integrantes/pipe" target="blank">mas info...</a>
			</div><!--/bio -->
			
			
					</div>
				</div><!--/contenido-->
				
				<div class="comentarios">
					<fb:comments href="<?=$url?>clavijo.php" num_posts="6" width="500"></fb:comments>
				</div>
			</div><!--/grande-->
						
		</div>
			
		
	</div><!-- //main -->
</body>
</html>









