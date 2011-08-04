<?php

function findURLbyID($id)
{
	
	$query = "select url from shells where id='$id' limit 1";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	return $row['url'];
}

?>