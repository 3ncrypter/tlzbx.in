<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='tools';
/*try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    echo 'Connected to Database<br/>';
    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }*/
	

// we connect to example.com and port 3307
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
else {
	
	echo "connect";
}
$db = mysql_select_db("tools",$link);
//mysql_close($link);


?>


