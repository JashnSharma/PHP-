<?php
// Current date
$currentDate = date("Y-m-d");

// Add 10 days to the current date
$futureDate = date("Y-m-d", strtotime("+10 days"));

// Display the results
echo "Current Date: " . $currentDate . "<br>";
echo "Date after 10 days: " . $futureDate . "<br>";

// Add author line
echo "This program is written by KRITIKA ERP-067";
?>
