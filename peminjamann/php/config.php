<?php
$dbhost ='localhost';
$dbuser ='root';
$dbpass ='';
//gantien databasemu
$dbname ='mahameru';
$db_dsn = "mysql:dbname=$dbname;host=$dbhost";
try {
  $db = new PDO($db_dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
  echo 'Connection failed: '.$e->getMessage();
}
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//mysql_connect($dbhost,$dbuser,$dbpass);mysql_select_db($dbname);
?>

<!-- 
$host = "localhost";
$username = "root";
$pw = "";
$db = "himasistore";

$koneksi = mysqli_connect($host, $username, $pw, $db);

 -->