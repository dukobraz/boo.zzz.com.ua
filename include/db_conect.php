<?php
$db_host ='mysql.zzz.com.ua';
$db_user ='budmarket';
$db_pass ='172654321Qq';
$db_database='budmarket';

$link = mysql_connect($db_host, $db_user, $db_pass);

mysql_select_db($db_database, $link) or die ("Нема звязку з БД" .mysql_error());
mysql_query("SET NAMES utf8");
?>