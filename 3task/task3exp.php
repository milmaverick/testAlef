<?php

$filename = '39_22.jpg';
$percent = 0.5;

// Content type
//header('Content-Type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = $width ;
$new_height = $height ;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
//imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height);
//imagecopyresampled($image_p, $image_p, 0, 0, $width - 1, 0, $width, $height, - $width, $height);
imagecopyresampled($image_p, $image, 0, 0, $width - 1, 0, $width, $height, - $width, $height);
imagecopymerge($image_p, $image, 0, 0, 0, 0, $width/2, $height, 100);
// Output
//imagejpeg($image_p, "image.jpeg", 0);
imagepng($image_p, "image.png", 0, -1);
//file_put_contents("image.png",$image_p);

/*
$size = getimagesize("twitter.png");
$h=$size[0];
$w=$size[1];

imagecopyresampled("twitter1.png", "twitter.png", 0, 0, 0, $h - 1, $w, $h, $w, - $h);
*/
?>