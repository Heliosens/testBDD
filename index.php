<?php

//$server = 'localhost';
//$user = 'root';
//$password = '';
//$db = 'bdd_cours';
//
//$conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);

require "connPDO.php";

$conn = new connPDO();
$conn->conn();

var_dump($conn);

