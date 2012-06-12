<?php
include_once "config.php";
$c=$_GET['c'];
//$facebook=$facebook->api_client->fql_query('SELECT user_id FROM like WHERE object_id="122706168308"');
function tamano_archivo($peso) {
$decimales = 2;
$clase = array(" Bytes", " KB", " MB", " GB", " TB");
return round($peso/pow(1024,($i = floor(log($peso, 1024)))), $decimales ).$clase[$i];
}
function GetSize($file, $display = 0) 
{ 

    global $size; 
     
    switch ($display) { 
        case 1: 
            $method = array('bytes', 'Kilobytes', 'Megabytes', 'Gigabytes'); 
            break; 
         
        case 2: 
            $method = array('<acronym title="bytes">b</acronym>', '<acronym title="Kilobytes">Kb</acronym>', 
            '<acronym title="Megabytes">Mb</acronym>', '<acronym title="Gigabytes">Gb</acronym>'); 
        break; 
         
        case 3: 
            $method = array_fill(0, 4, '');
            break; 
        
        default: 
            $method = array('b','Kb','Mb','Gb'); 
        break; 
    } 
     
    $filepath = str_replace('\\', '/', urldecode($file)); 
     
    if(is_numeric($filepath)) { 
        $size = $filepath;

    } elseif (!file_exists($filepath)) { 
        return 'El archivo especificado no existe'; 
    } elseif (!is_file($filepath) && !is_dir($filepath)) { 
            return '"'.$file.'" no es un fichero o directorio v?lido'; 
    } else { 
        if ($dir = @opendir($filepath)) { 
            while ($file = readdir($dir)) { 
                if (is_dir($filepath.'/'.$file)) { 
                    if ($file != '.' && $file != '..') { 
                        $size += GetSize($filepath."/".$file, 3); 
                    } 
                } else { 
                    $size += filesize ($filepath.'/'.$file); 
                } 
            } 
            closedir($dir); 
        } else { 
            $size += filesize($filepath); 
        } 
    } 

    if ($size <= 1024) { 
        return $size . ' ' . $method[0]; 
    } else { 
        if ($size >= pow(1024, 4)) { 
            return round($size/pow(1024, 4), 2) . ' ' . $method[4]; 
        } elseif ($size >= pow(1024, 3)) { 
            return round($size/pow(1024, 3), 2) . ' ' . $method[3]; 
        } elseif ($size >= pow(1024, 2)) { 
            return round($size/pow(1024, 2), 2) . ' ' . $method[2]; 
        } else { 
            return round($size/1024, 2) . ' ' . $method[1]; 
        } 
    } 

    clearstatcache(); 
}
?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta property="og:type" content="song" />
		<meta property="fb:admins" content="613801383" />
		<meta property="og:audio" content="<?=$canciones[$c-1]['href']?>" />
		<meta property="og:title" content="<?=$canciones[$c-1]['nombre']?>" />
		<meta property="og:url" content="http://mauricioaizaga.com/LaOtraEskina/musica.php" />
		<meta property="og:site_name" content="LaOtraEskina.com" />
		<meta property="og:audio:title" content="<?=$canciones[$c-1]['nombre']?>" />
		<meta property="og:audio:artist" content="La Otra Eskina" />
		<meta property="og:audio:album" content="<?=$canciones[$c-1]['album']?>" />
		<meta property="og:audio:type" content="application/mp3" />
		<meta property="og:image" content="<?=$url?>img/muchachos/laotraeskina.jpg" /> 
		
		
		<title>La Otra Eskina &gt; <?=$canciones[$c-1]['nombre']?></title>
		<meta name="description" content="De Pereira pa'l mundo! La Otra Eskina: <?=$canciones[$c-1]['nombre']?>" />
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
		
	</head>
	<body><div style="text-align:center;width:400px;margin:0 auto;">
	Canción: <?=$canciones[$c-1]['nombre']?><br>
	<object type="application/x-shockwave-flash" data="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" width="160" height="20">
					<param name="wmode" value="transparent" />
					<param name="movie" value="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" />
					<param name="FlashVars" value="mp3=<?=$canciones[$c-1]['href']?>&amp;bgcolor1=ffffff&amp;bgcolor2=cccccc&amp;buttoncolor=999999&amp;volumewidth=30&amp;volumeheight=10&amp;buttonovercolor=0&amp;slidercolor1=cccccc&amp;slidercolor2=999999&amp;sliderovercolor=666666&amp;textcolor=0&amp;showvolume=1&amp;" />
					<p>Error - F5</p>
				</object><br><br>
				<div id="fb-root"></div><script src="http://connect.facebook.net/es_LA/all.js#appId=161408067264807&amp;xfbml=1">
				</script>
				
				<div style="text-align:center">
				<fb:like href="http://www.youtube.com/watch?v=etHDJT1UVvI" send="false" layout="button_count" width="130" show_faces="true" font=""></fb:like>
							</div>
				<br>
				<a href="<?=$page?>">Disfruta mas contenido aquí</a>
				<?php
				
echo  GetSize( "music/songs/La_Otra_Eskina__Contigo.mp3");

				?>
		</div>
	</body>
</html>
