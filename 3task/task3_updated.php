<?php
	
	function reflectionImage($FileName){
		
		list($width, $height) = getimagesize($FileName);
		$image_p = imagecreatetruecolor($width, $height);
		$image = imagecreatefromjpeg($FileName);
		imagecopyresampled($image_p, $image, 0, 0, $width - 1, 0, $width, $height, - $width, $height);
		imagecopymerge($image_p, $image, 0, 0, 0, 0, $width/2, $height, 100);
		imagepng($image_p, "image.png", 0, -1);

	}


	function SaveImage($url) {
	
		$Image = @file_get_contents($url);
		if(!$Image) {
			return "Не удалось получить данные файла по ссылке";
		}
		 else {
		
		 	$ExplodeUrl = explode("/", $url);
			$FileName = $ExplodeUrl[count($ExplodeUrl)-1];
			
			if(file_exists($FileName)) {
				$FileName = rand(10000000, 99999999).$FileName;
			}
			
			$CreateNewFile = fopen($FileName, "w+");
			$WriteInFile = fwrite($CreateNewFile, $Image);
			return $FileName;
		 }
	}

	reflectionImage(SaveImage("https://www.nastol.com.ua/large/201110/9034.jpg"));

	?>