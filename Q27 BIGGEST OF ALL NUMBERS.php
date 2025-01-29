<?php

$numbers = [48, 69, 18, 5, 11, 100, 99, 56];

$biggest = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
       if ($numbers[$i] > $biggest) {
        $biggest = $numbers[$i];
    }
}

echo "The biggest number in the array is: $biggest";
echo"<br>";
echo("This program is written and executed by Jashn Sharma (2220100247)");
?>
