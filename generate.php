<?php 
session_start();
header('Content-type: image/jpeg');

$text = $_SESSION['secure'];
$font_size=30;

$image_width = 120;
$image_height = 40;

// imagecreate(width, height);
$image = imagecreate($image_width, $image_height);
imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);


for ($x=1; $x <= 30 ; $x++) { 
	# code...
	$x1= rand(1,100);
	$y1= rand(1,100);
	$x2= rand(1,100);
	$y2= rand(1,100);

	// imageline(image, x1, y1, x2, y2, color);
	imageline($image, $x1, $y1, $x2, $y2, $text_color);// for creating the noise. this function will add random lines

}
// imagettftext(image, size, angle, x, y, color, fontfile, text);
imagettftext($image, $font_size, 0, 15, 30, $text_color, 'alexandria.ttf', $text );//mention the fonat name that you want
imagejpeg($image);
// 
?>