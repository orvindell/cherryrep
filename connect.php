<?php
   
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tomekf";
   
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
?>