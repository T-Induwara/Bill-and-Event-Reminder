<?php
session_start();

// Clear session data
session_unset();
session_destroy();

// Redirect to login page
header("Location: staff-login.php");
exit();
?>