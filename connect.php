<?php
/**
 * Created by PhpStorm.
 * User: kiptatum
 * Date: 1/23/2018
 * Time: 12:46 PM
 */


$servername = "localhost";
$username = "root";
$password = "root";
//connect to database
$conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

