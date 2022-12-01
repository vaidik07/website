<?php
session_start();
$mysqli = require __DIR__ . '/book_form.php';
$sql = "INSERT INTO book_form(name,email,phone,address,location,    guests,arrivals,leaving,id)
        VALUES (?,?,?,?,?,?,?,?,?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql))
{
    die("SQL error");
}

$stmt->bind_param("sssi",
$_POST['send'],
 $_POST['name'],
  $_POST['email'],
$_POST['phone'],
 $_POST['address'],
 $_POST['location'],
 $_POST['guests'],
 $_POST['arrivals'],
$_POST['leaving'],
$_SESSION['id']);


?>