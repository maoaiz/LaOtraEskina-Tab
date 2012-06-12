<?php
$vol="";
if($i==0) $vol="autoplay=1"; else $vol="autoplay=0";
echo "mp3=".$canciones[$i]['href']."&amp;width=150&amp;volumewidth=30&amp;bgcolor1=ffffff&amp;bgcolor2=cccccc&amp;buttoncolor=999999&amp;volumewidth=40&amp;volumeheight=15&amp;buttonovercolor=0&amp;slidercolor1=cccccc&amp;slidercolor2=999999&amp;sliderovercolor=666666&amp;textcolor=0&amp;showvolume=1&amp;".$vol;
?>
