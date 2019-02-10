<?php

	function SaveImage($url) {
	// открываем содержимое файла по ссылке
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
echo Saveimage("http://live-code.ru/uploads/twitter.png");

?>