<?php
$servername = "localhost";
$username = "sahil9697";
$password = "17143281";
$db_name ="gcek_fest";
$table_name ="students";
$connection = mysqli_connect($servername, $username, $password);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $db_name);
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}