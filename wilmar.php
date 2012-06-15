<?php
$musico="Wilmar Gaviria";
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
						<div><a href="daniel.php"><img src="<?=$fotos['daniel']?>"></a></div>
						<div><a href="wilmar.php"   class="on"><img src="<?=$fotos['wilmar']?>"></a></div>
						<div><a href="gordon.php"><img src="<?=$fotos['gordon']?>"></a></div><!--
						<div><a href="clavijo.php"><img src="<?=$fotos['clavijo']?>"></a></div>-->
						<div><a href="raul.php"><img src="<?=$fotos['raul']?>"></a></div>
						<div><a href="elider.php"><img src="<?=$fotos['elider']?>"></a></div>
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
					<li><div class="info"><?=$musico?><a href="https://www.facebook.com/profile.php?id=700249086" target="_blank" ><span class="face"></span></a></div>
						<img src="img/muchachos/wilmar1.jpg"  />
					</li>
					<li><div class="info" ><?=$musico?><a href="https://www.facebook.com/profile.php?id=700249086" target="_blank" ><span class="face"></span></a></div>
						<img src="img/muchachos/wilmar3.jpg" />
					</li>
					<li><div class="info" ><?=$musico?><a href="https://www.facebook.com/profile.php?id=700249086" target="_blank" ><span class="face"></span></a></div>
						<img src="img/muchachos/wilmar2.jpg" />
					</li>
				</ul>
			</div>
			<!--/fotos-->
			<div class="bio">
				Wilmar Andrés Gaviria Santa, nace en el municipio de Apia Risaralda. Empezó a incursionar en la música a la edad de 9 años cuando formó parte del coro de la escuela Antonia Santos, a los 12 años hizo parte del coro navideño de la casa de la cultura de Apia donde era la voz principal.<br>A los 15 años empieza a recibir clases de técnica vocal por parte del maestro Carlos Fernando López Naranjo y a formar parte del coro de la Escuela de música del municipio... <a class="mas_info" href="http://laotraeskina.com/blog/index.php/integrantes/wilmar" target="blank">mas info...</a>
			</div><!--/bio -->
			
			
					</div>
				</div><!--/contenido-->
				
				<div class="comentarios"><div>
					<fb:comments href="<?=$url2?>wilmar.php" num_posts="6" width="500"></fb:comments>
					</div>
				</div>
			</div><!--/grande-->
						
		</div>
			
		
	</div><!-- //main -->
</body>
</html>












