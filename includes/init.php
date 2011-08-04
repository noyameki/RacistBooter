<?php

// MySQL Settings
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_database = 'shell';

// Connect to the database
mysql_connect ($db_host, $db_user, $db_pass) or die ('Could not connect to the database.');
mysql_selectdb ('shell') or die (mysql_error());
?>