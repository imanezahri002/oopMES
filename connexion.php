<?php
$servername="localhost";
$username="root";
$dbname="oop";
$password="";
$sdn="mysql:host=".$servername.";dbname=".$dbname;
$conn=new PDO($sdn,$username,$password);

?>