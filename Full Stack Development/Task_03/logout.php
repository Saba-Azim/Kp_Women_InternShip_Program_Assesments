<?php
session_start();
$_SESSION = [];        // Clear session data
session_destroy();     // Destroy session

// Optional: redirect to login or homepage
header("Location: login.php");
exit;
?>