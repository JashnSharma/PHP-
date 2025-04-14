<?php
session_start(); // Start the session

// Set session variable if not already set
if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = "JASHN";
    $message = "Session variable 'JASHN' is now set.";
} else {
    $message = "Welcome back, " . $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>

<h2>PHP Session Demo</h2>
<p><?php echo $message; ?></p>

<p>This program is written by <strong>JASHN ERP-048</strong></p>

</body>
</html>
