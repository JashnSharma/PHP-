<html>
<body>
<?php 
$cars = array("Volvo", "BMW", "Toyota"); // Corrected variable name
sort($cars); // Sorting the array
$clength = count($cars); // Getting the length of the array

for ($x = 0; $x < $clength; $x++) { 
    echo $cars[$x]; 
    echo "<br>"; 
  echo "This Program is written by JASHN SHARMA, 2220100247";
}
?>
</body>
</html>
