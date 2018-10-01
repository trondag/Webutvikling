<?php 
	$tilkobling = mysqli_connect("localhost","root","","logging");

	if ( isset($_SERVER["HTTP_REFERER"]) )
	{
		$webside = "'" . $_SERVER["HTTP_REFERER"] . "'" ;
	}
	else
	{
		$webside = "NULL";
	}

	if ( isset($_SERVER["REMOTE_HOST"]) )
	{
		$maskinadresse = "'" . $_SERVER["REMOTE_HOST"] . "'" ;
	}
	else
	{
		$maskinadresse = "NULL";
	}

	$sql = sprintf("INSERT INTO logglinje (tidsstempel, ipadresse, webside, maskinadresse) VALUES (NOW(), '%s', %s, %s)",$_SERVER["REMOTE_ADDR"], $webside , 		$maskinadresse);

	$tilkobling->query($sql);

	header("Content-type: image/png");

	$file = fopen("smiley.png","r");
	while($linje=fgets($file))
	{
		echo $linje;
	}
	fclose($file);
?>
