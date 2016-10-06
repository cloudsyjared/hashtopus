<?php
$dbhost="hashtopus-mysql";
$dbuser="root";
$dbpass="";
$dbname="hashtopus";
$dblink = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Error " . mysqli_connect_error($dblink));
?>
