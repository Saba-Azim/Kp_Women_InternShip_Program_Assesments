<?php
include '../include/db.php';
session_start();

$id = $_GET['id'];

$conn->query("DELETE FROM contacts WHERE id = $id");

header("Location: contact_list.php");
exit;
?>