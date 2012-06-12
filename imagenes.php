<?php
$musico="Integrantes";
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
		<div class="content imagen">
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
					<div class="titulo">
						<h1>Integrantes</h1>
					</div>
					<div class="musico principal"><a href="elider.php" class="marco" >
						<img src="<?=$integrantes['elider']?>"  /></a><a href="elider.php">
						<div class="nombre">Elider<a href="https://www.facebook.com/elider" target="_blank" title="Ver Perfil de Elider" ><span class="face"></span></a></div>
						<div class="ocupacion">Voz Principal</div>
						</a>
					</div>
					<div class="musico"><a href="daniel.php" class="marco" >
						<img src="<?=$integrantes['daniel']?>" /></a><a href="daniel.php">
						<div class="nombre">Daniel<a href="https://www.facebook.com/profile.php?id=672398510" target="_blank" title="Ver Perfil de Daniel" ><span class="face"></span></a></div>
						<div class="ocupacion">Guitarra</div>
						</a>
					</div>
					<div class="musico"><a href="wilmar.php" class="marco" >
						<img src="<?=$integrantes['wilmar']?>" /></a><a href="wilmar.php">
						<div class="nombre">Wilmar<a href="https://www.facebook.com/profile.php?id=700249086" target="_blank" title="Ver Perfil de Wilmar" ><span class="face"></span></a></div>
						<div class="ocupacion">Segunda Voz</div>
						</a>
					</div>
					<div class="musico"><a href="gordon.php" class="marco" >
						<img src="<?=$integrantes['gordon']?>"  /></a><a href="gordon.php">
						<div class="nombre">Gordon<a href="https://www.facebook.com/profile.php?id=617618644" target="_blank" title="Ver Perfil de Gordon" ><span class="face"></span></a></div>
						<div class="ocupacion">Guitarra Electrica</div>
						</a>
					</div><!--
					<div class="musico"><a href="clavijo.php" class="marco" >
						<img src="<?=$integrantes['clavijo']?>"  /></a><a href="clavijo.php">
						<div class="nombre">Pipe<a href="https://www.facebook.com/pipecla88" target="_blank" title="Ver Perfil de Pipe" ><span class="face"></span></a></div>
						<div class="ocupacion">Bajo</div>
						</a>
					</div>-->
					<div class="musico"><a href="raul.php" class="marco" >
						<img src="<?=$integrantes['raul']?>"  /></a><a href="raul.php">
						<div class="nombre">Raul<a href="https://www.facebook.com/profile.php?id=100000918629017" target="_blank" title="Ver Perfil de Raul" ><span class="face"></span></a></div>
						<div class="ocupacion">Batería</div>
						</a>
					</div>
				</div>
					<div style="margin-top:35px;">
					<hr />
					<center>
					<img src="img/home2.png" width="400px"/></center>
					<div>
				</div>
				
			</div>
			<!---->
			<!---->		
		</div>
		<div class="comentario"><!--
			<fb:like href="<?=$page?>"
			send="true" layout="standard" width="500" show_faces="false" font=""></fb:like>-->
			<fb:comments href="<?=$url?>/imagenes.php" num_posts="10" width="500"></fb:comments>
		</div>
	</div><!-- //main -->
	</body>
</html>






