<?php

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'root';
$db_database	= 'gsy'; 

$link = mysql_connect($db_host,$db_user,$db_pass);
if (!$link)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_database,$link);

?>