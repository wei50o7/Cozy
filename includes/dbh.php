<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'abcd';

$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
  die('Connection Failed'.mysqli_connect_error());
}
