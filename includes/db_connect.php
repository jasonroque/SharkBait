<?php

$host = 'localhost';
$port = '3306';
$database = 'anilaosharkbait';
$user = 'root';
$password = 'root';

$mysqli = new mysqli($host, $user, $password,  $database, $port);

if($mysqli->connect_error) {
    die ('Connect Error1 (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if(mysqli_connect_error()) {
    die('Connect Error2 (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

