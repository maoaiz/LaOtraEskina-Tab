<?php
$musico="Videos";
include_once "config.php";
$v=(isset($_GET['v'])) ? $_GET['v'] : sizeof($videos);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<script>var video="t";</script>
		<?php include_once "cabecera.php";?>
	</head>
	<body>
		<?php include_once "facebook_connect.php"; ?>
	<div class="main">
		<div class="content video">
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
					<div class="slider">
				<a class="prev left"></a>
				<div class="scrollable">
					<div class="items">
						<?php
						$v2=$v;
						$long=sizeof($videos);
						if($v==1){?>
							<div><a href="videos.php?v=<?=sizeof($videos)?>">
								<span class="video_nom"><?=$videos[sizeof($videos)-1]['nombre']?></span>
								<img src="http://i4.ytimg.com/vi/<?=$videos[sizeof($videos)-1]['code']?>/default.jpg" 
								width="99px" height="66px"  />
							</a></div>
						<?php
						$v2=$v + 1;
						$long=sizeof($videos)-1;
						}
						for($i=($v2-1);$i<=$long;$i++){?>
							<div><a href="videos.php?v=<?=$i?>" <?= ($v==$videos[$i-1]['num']) ? "class='on'" : ""; ?>>
								<span class="video_nom"><?=$videos[$i-1]['nombre']?></span>
								<img src="http://i4.ytimg.com/vi/<?=$videos[$i-1]['code']?>/default.jpg" 
								width="99px" height="66px"  />
							</a></div>
						<?php
						}if($v2!=1){
							for($i=1;$i<($v2-1);$i++){?>
								<div><a href="videos.php?v=<?=$i?>" <?= ($v==$videos[$i-1]['num']) ? "class='on'" : ""; ?>>
									<span class="video_nom"><?=$videos[$i-1]['nombre']?></span>
									<img src="http://i4.ytimg.com/vi/<?=$videos[$i-1]['code']?>/default.jpg" 
									width="99px" height="66px"  />
								</a></div>
							<?php
							}
						}
						?>
						
					</div>
				</div>
				<a class="next right"></a>
			</div>
					<!--inicia videos-->
					<div class="vid">
						<div class="info"><?=$videos[$v-1]['nombre']?></div><!---->
				<iframe width="330" height="210" src="http://www.youtube.com/embed/<?=$videos[$v-1]['code']?>?rel=0&autoplay=1" frameborder="0" >
						</iframe>
					</div><!--Cierra videosbackground-color:white;-->	
				<div  style="margin-bottom:5px;text-align:left;padding:5px" >
					<fb:like href="http://www.youtube.com/watch?v=<?=$videos[$v-1]['code']?>"
					send="false" layout="standard" colorscheme="dark" width="380" show_faces="true" font=""></fb:like>
				</div>	
					
				</div><!--Cierra integrantes-->
				
					<div class="comentario" style="">
						<fb:comments href="<?=$url2?>videos.php?v=<?=$v?>" num_posts="10" width="490"></fb:comments>
					</div>
				</div>
				
			</div>
			<!---->
			<!---->		
		</div>
		<div class="comentario"><!--
			<fb:like href="http://www.facebook.com/pages/La-Otra/237090246315378?sk=app_161408067264807"
			send="true" layout="standard" width="500" show_faces="false" font=""></fb:like>
			<fb:comments href="<?=$url?>/videos.php" num_posts="10" width="500"></fb:comments>
			-->
		</div>
	</div><!-- //main -->
	</body>
</html>






