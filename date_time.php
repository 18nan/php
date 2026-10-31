<?php

// Set the default timezone
date_default_timezone_set("Asia/Kolkata");

// Get the default timezone
echo "Default Timezone: ";
echo date_default_timezone_get();
echo "<br><br>";

// Current date and time using date()
echo "Current Date: ";
echo date("d-m-Y");
echo "<br>";

echo "Current Time: ";
echo date("h:i:s A");
echo "<br><br>";

// Current Unix timestamp using time()
echo "Current Unix Timestamp: ";
echo time();
echo "<br><br>";

// Specific date using mktime()
$timestamp = mktime(0, 0, 0, 8, 1, 2024);

echo "Specific Date using mktime(): ";
echo date("d-m-Y", $timestamp);
echo "<br><br>";

// Date using strtotime()
$timestamp2 = strtotime("1 August 2024");

echo "Date using strtotime(): ";
echo date("d-m-Y", $timestamp2);
echo "<br>";

?>