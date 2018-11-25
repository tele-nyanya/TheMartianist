<?php
$f_name=$_GET["f_name"];
$l_name=$_GET["l_name"];
$email=$_GET["email"];
$role=$_GET["role"];

$mysqli = new mysqli("localhost", "redalert1917", "1215100902000401", "themartianist") or die('Не могу выбрать базу данных');
$sql = "INSERT INTO users (f_name, l_name, email,  role) VALUES ('$f_name', '$l_name', '$email', '$role')";
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}