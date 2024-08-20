<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "hackover";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
 die("Failed to connect!");
}
