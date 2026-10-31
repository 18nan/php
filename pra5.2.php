<?php

session_start();

$_SESSION["username"] = "Nandika";
$_SESSION["course"] = "B.Tech IT";
$_SESSION["semester"] = "3rd Semester";

echo "<h2>Session Details</h2>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"] . "<br>";
echo "Semester: " . $_SESSION["semester"] . "<br><br>";

// Check whether the session is active
if (session_status() == PHP_SESSION_ACTIVE) {
    echo "Session is currently active.<br>";
}

session_unset();

session_destroy();

echo "<br>All session variables have been removed.<br>";
echo "PHP Session Destroyed Successfully.";
?>