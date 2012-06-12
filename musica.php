<?php
$musico="Música";
include_once "config.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "cabecera.php";?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
		<!-- styling -->
		<link rel="stylesheet" type="text/css" href="css/scrollable-vertical.css?v=1" />
		<script language="JavaScript" type="text/javascript" src="js/codigo.js"></script>
		
	</head>
	<body>
		<?php include_once "facebook_connect.php"; ?>
	<div class="main">
		<div class="content music">
			<div class="grande">
				<div class="menubox">
					<div class="logo1">
						<a href="http://laotraeskina.com" target="_blank"><img src="img/home2.png" width="110px"/></a>
					</div>
					<?php include_once "menu.html"; ?>
					<?php include_once "share.php"; ?>
				</div>
				<div class="contenido">
					
				<div class="integrantes"><!--integrantes-->
					<div class="titulo" style="overflow:hidden">
						<h1><?=$musico?></h1>
					</div>	
					
					<!---->
					<p>Descarga los &eacute;xitos de <u>La Otra Eskina</u></p>
					
					
					<!-- Scrollable Vertical -->
					<div class="todo">
					<div class="actionsv">
						<a class="prev" title="Subir" rel="tooltip" >
						<img src="http://mauricioaizaga.com/LaOtraEskina/img/flecha-up.png" />
						</a>
					</div>


					<!-- root element for scrollable -->
					<div class="scrollablev vertical">
						<!-- root element for the items -->
						<div class="itemsv">
	
							<?php
							for($i=0;$i<sizeof($canciones);$i++){
							?>
							<div>
								<div class="itemv"><div class="c">
									<span class="cancion"><a class="cancion" >
									<?=$canciones[$i]['nombre']?></a></span>
									<span class="miframe">		
							<a name="fb_share" type="button" share_url="<?=$url?>cancion.php?c=<?=($i)?>" >Publicar</a><br><br>
									<?php /*GetSize($canciones[$i]['href']);*/ ?>
									</span>
							<span class="opc descarga"><a href="<?=$url.$canciones[$i]['href']?>">
							<img src="<?=$url?>img/download.png" width="16px" height="20px" /><br>Descarga
							<!---->
							</a></span>
						<span class="opc letra">
							<a href="#" onclick="do_Ajax('letras.php?l=<?=$canciones[$i]['num']?>', 'letras-canc');">
										<img src="<?=$url?>img/letra.png" width="16px" /><br>Letra</a>
										
						</span><br>
									<div class="reprod">
									
				<object type="application/x-shockwave-flash" data="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" width="160" height="20">
					<param name="wmode" value="transparent" />
					<param name="movie" value="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" />
					<param name="FlashVars" value="<?php include 'mp3_config.php'; ?>" />
					<p>No disponible</p>
				</object>
									
									</div>
									</div>
								</div>
							</div>
							<?php
							}
							?>
						</div>
	
					</div>

					<div class="actionsv">
						<a class="next" rel="tooltip" title="Ver mas canciones">
						<img src="http://mauricioaizaga.com/LaOtraEskina/img/flecha-down.png" /></a>
					</div><br>
					
				
					<div class="letra-cancion">
				<div id="letras-canc"><pre>
Para descargar las canciones:
1) Click derecho en el icono de descarga
2) Guardar enlace como... | Save Link As... |
</pre>
				</div>
			</div>	


					<!-- //scrollable vertical -->
					</div><!--//todo-->
					<!---->	
				</div><!--Cierra integrantes-->
					
				<div class="comentario">
					<fb:like style="color:white" href="<?=$page?>"
					send="true" layout="standard" width="500"show_faces="false" colorscheme="ligth" font=""></fb:like></div>
					<fb:comments href="<?=$url?>musica.php" num_posts="5" width="480"></fb:comments>
				</div>
				
			</div><!--Cierra GRande-->
		</div>
	</div><!-- //main -->
	</body>
</html>






