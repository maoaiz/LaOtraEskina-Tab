<?php
include_once "config.php";
$titulo="La Otra Eskina tambień esta en Facebook";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "cabecera.php";?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
	</head>
	<body>
	<?php include_once "facebook_connect.php"; ?>
	<div class="main">
		<div class="content home">
			<div class="logo1" style="position:absolute;">
				<a href="http://laotraeskina.com" target="_blank"><img src="img/home2.png" width="110px"/></a>
			</div>
			<?php include_once "menu.html"; ?>
			<?php include_once "share.php"; ?>
			<!---->
			<div style="position:absolute;top:348px;margin-left:160px;width:200px;height:60px;overflow:hidden"><!-- -->
				<div id="player-holder"></div>
			</div>
			<div class="poweredby">Desarrollado por <a href="http://mauricioaizaga.com" target="_blank">MauricioAizaga.com</a></div>
			<a href="<?=$url?>musica.php">
				<div class="download">
				</div>
			</a>
				<div class="slide" style="margin-top:325px">
					<a class="prev left"></a>
					<div class="scrollable">
						<div class="items">
							<div>
								<a href="<?=$href?>musica.php">
									<div class="nombre"><img src="img/bordes/nomdescargas.png"></div>
									<div class="bordes"><img src="img/bordes/descargas.jpg" alt="Musicos" /></div>
								</a>
							</div>
							<div>
								<a href="<?=$href?>imagenes.php">
									<div class="nombre"><img src="img/bordes/nomartistas.png"></div>
									<div class="bordes"><img src="img/bordes/artistas3.jpg" alt="Musicos" /></div>
								</a>
							</div>
							<div>
								<a href="http://www.facebook.com/everestproducciones" target="_blank">
									<div class="nombre"><img src="img/bordes/nomproductor.png"></div>
									<div class="bordes"><img src="img/bordes/everest.jpg" alt="Musicos" /></div>
								</a>

							</div><!--
							<div>
								<a href="<?=$href?>">
									<div class="nombre"><img src="img/bordes/nomdescargas.png"></div>
									<div class="bordes"><img src="img/123/perfil (copia).jpg" alt="Musicos" width="168px" /></div>
								</a>
							</div> -->
						</div>
					</div>			
					<a class="next right"></a>
		</div>
				
				
				<!---->
		</div><!--
		<fb:like href="<?=$page?>" send="true" layout="standard" width="500" show_faces="false" font=""></fb:like>-->
	<fb:comments href="<?=$url2?>" num_posts="8" width="500"></fb:comments>
	</div><!-- //main -->
	<script type="text/javascript">//music/originalmultiple/playlist.xml
		var options = {};
		options.playlistXmlPath = "<?=$url?>music/originalmultiple/playlist.xml";
		options.autoPlay = "true";
		options.defaultVolume = "50";
		options.loopPlaylist = "true";
		options.firstColor = "#ffffff"; 
		options.secondColor = "#ffffff"; 
		options.backColor = "#363636";
		options.hightlightAlpha = "10";  
		options.strokeColor = "#000000"; 

		var params = {};
		params.allowFullscreen = "true";
		params.allowScriptAccess = "always";

		swfobject.embedSWF("<?=$url?>music/originalmultiple/OriginalMusicPlayer.swf", "player-holder", "180", "80", "9.0.0",false, options, params, {});
	</script>
	</body>
</html>
