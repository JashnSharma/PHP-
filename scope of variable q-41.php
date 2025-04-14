<?php

$greet = "";  // Declare $greet globally

function test(){
    global $greet;  // Access the global variable
    $greet = "hello world";
    echo $greet;
}

test();  
echo $greet;  
echo "This Program is written by JASHN SHARMA, 2220100247";
?>
