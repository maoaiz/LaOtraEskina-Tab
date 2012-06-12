<?php
include_once "config.php";
$c=$_GET['c'];
//$facebook=$facebook->api_client->fql_query('SELECT user_id FROM like WHERE object_id="122706168308"');
?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta property="og:type" content="song" />
		<meta property="og:audio" content="<?=$url.$canciones[$c]['href']?>" />
		<meta property="og:title" content="<?=$canciones[$c]['nombre']?>" />
		<meta property="og:url" content="http://mauricioaizaga.com/LaOtraEskina/cancion.php?c=<?=$c?>" />
		<meta property="og:site_name" content="LaOtraEskina.com" />
		<meta property="og:audio:title" content="<?=$canciones[$c]['nombre']?>" />
		<meta property="og:audio:artist" content="La Otra Eskina" />
		<meta property="og:audio:album" content="<?=$canciones[$c]['album']?>" />
		<meta property="og:audio:type" content="application/mp3" />
		<meta property="og:image" content="<?=$url?>img/muchachos/laotraeskina.jpg" /> 
		<meta property="fb:admins" content="613801383" />
		
		
		<title>La Otra Eskina &gt; <?=$canciones[$c]['nombre']?></title>
		<meta name="description" content="De Pereira pa'l mundo! La Otra Eskina: <?=$canciones[$c]['nombre']?>" />
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
		
	</head>
	<body><div style="text-align:center;width:400px;margin:0 auto;">
	Canción: <?=$canciones[$c]['nombre']?><br>
	<object type="application/x-shockwave-flash" data="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" width="160" height="20">
					<param name="wmode" value="transparent" />
					<param name="movie" value="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" />
					<param name="FlashVars" value="mp3=<?=$canciones[$c]['href']?>&amp;bgcolor1=ffffff&amp;bgcolor2=cccccc&amp;buttoncolor=999999&amp;volumewidth=30&amp;volumeheight=10&amp;buttonovercolor=0&amp;slidercolor1=cccccc&amp;slidercolor2=999999&amp;sliderovercolor=666666&amp;textcolor=0&amp;showvolume=1&amp;" />
					<p><?=$canciones[$c]['nombre']?></p>
				</object><br><br>
				<div id="fb-root"></div><script src="http://connect.facebook.net/es_LA/all.js#appId=161408067264807&amp;xfbml=1">
				</script>
				
				<div style="text-align:center">
				<fb:like href="http://www.youtube.com/watch?v=etHDJT1UVvI" send="false" layout="button_count" width="130" show_faces="true" font=""></fb:like>
							</div>
				<br>
				<a href="<?=$page?>">Disfruta mas contenido aquí</a>
				
				
				
		</div>
	</body>
</html>
