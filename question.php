<?php
$name=$_GET["name"];
$category=$_GET["category"];
$question=$_GET["question"];

$mysqli = new mysqli("localhost", "redalert1917", "1215100902000401", "themartianist") or die('Не могу выбрать базу данных');
$sql = "INSERT INTO questions (name, category, question) VALUES ('$name', '$category', '$question')";
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}