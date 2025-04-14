<?php
$file = fopen("example.txt", "r"); // Open the file in read mode
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }
    fclose($file);
} else {
    echo "Error opening the file.";
}
echo "This Program is written by JASHN SHARMA, 2220100247";
?>
