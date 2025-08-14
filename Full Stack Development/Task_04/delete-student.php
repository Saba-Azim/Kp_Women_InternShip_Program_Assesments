<?php
include '../include/db.php';
session_start();

$id = $_GET['id'];

$conn->query("DELETE FROM student WHERE id = $id");

header("Location: student.php");
exit;
?>