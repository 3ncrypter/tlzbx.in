<?php
$hostname='localhost';
$username='root';
$password='mysql';
$dbname = 'tlzbx';
mysql_connect("$hostname", "$username", "$password") OR die('Can not connenct to database'. mysql_error());
mysql_select_db("$dbname") OR die('Can not select  database'. mysql_error());
?>