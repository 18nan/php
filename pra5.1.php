<?php
// Start the PHP session
session_start();

// Store values in session variables
$_SESSION["name"] = "Nandika";
$_SESSION["course"] = "B.Tech IT";

// Display session values
echo "Session Started Successfully<br>";
echo "Name: " . $_SESSION["name"] . "<br>";
echo "Course: " . $_SESSION["course"];
?>
