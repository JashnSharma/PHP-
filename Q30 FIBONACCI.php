<?php
$terms = 10;
$a = 0;
$b = 1;
echo $a . " " . $b . " ";
for ($i = 3; $i <= $terms; $i++) {
    $nextTerm = $a + $b;
    echo $nextTerm . " ";
      $a = $b;
    $b = $nextTerm;
    echo("This program is written and executed by Jashn Sharma (2220100247)");
}
?>
