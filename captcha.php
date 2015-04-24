<?php
	session_start();
	$string = "";
	for ($i = 0; $i < 6; $i++)
		$string .= chr(rand(97, 122));
	
	$_SESSION['rand_code'] = $string;

	$dir = "fonts/";

	$image = imagecreatetruecolor(200, 60);
	$black = imagecolorallocate($image, 0, 0, 0);
	$color = imagecolorallocate($image, 220, 220, 220);
	$white = imagecolorallocate($image, 255, 255, 255);

	imagefilledrectangle($image,0,0,399,99,$white);
	imagettftext ($image, 30, 0, 35, 45, $color, $dir."ubuntu.ttf", $_SESSION['rand_code']);

	header("Content-type: image/png");
	imagepng($image);
?>