<?php
header('Content-type: image/jpeg');
$image_source = $_GET['imgsrc'];

$jpg_image = imagecreatefromjpeg($image_source);


$font_path = 'Roboto-Regular.ttf';

$fontWhite = imagecolorallocate($jpg_image, 255, 255, 255);

$text1 = $_GET['t1'];
$text2 = $_GET['t2'];
$text3 = $_GET['t3'];

imagettftext($jpg_image, 80, 0, 70, 120, $fontWhite, $font_path, $text1);
imagettftext($jpg_image, 50, 0, 70, 200, $fontWhite, $font_path, $text2);
imagettftext($jpg_image, 30, 0, 70, 1170, $fontWhite, $font_path, $text3);

imagejpeg($jpg_image);
?>
