<?php
$number = 153; 
$originalNumber = $number;

$length = strlen((string)$number);

$sum = 0;

while ($number > 0) {
    $digit = $number % 10;
    $sum += pow($digit, $length);

       $number = (int)($number / 10);
}

if ($sum == $originalNumber) {
    echo "$originalNumber is an Armstrong number.";
} else {
    echo "$originalNumber is not an Armstrong number.";
}
    echo"<br>";
    echo("This program is written and executed by Jashn Sharma (2220100247)");

?>
