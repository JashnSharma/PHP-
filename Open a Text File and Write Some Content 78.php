<?php
$file = fopen("example.txt", "w"); // Open the file in write mode
fwrite($file, "Hello, this is a sample text written into the file.\n");
fwrite($file, "This program is written by Jashn ERP-048.");
fclose($file);
echo "File has been written successfully.";
?>
