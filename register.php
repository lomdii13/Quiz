<?php

session_start();

$conn = new mysqli('localhost','root','','register');

$name = $_POST['name'];
$age = $_POST['age'];
$rollno = $_POST['rollno'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];

$stmt = $conn->prepare("insert into stable(name , age , rollno , m1 , m2) values(?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $name, $age, $rollno, $m1, $m2);
$execval = $stmt->execute();
echo $execval;
header("Location: true.php");
$stmt->close();
$conn->close();


?>