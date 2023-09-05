<?php
// PHP program to break the loop
  
// Declare an array and initialize it
$array = array( 1, 2, 3, 4, 5, 6, 7 );
  
// Use foreach loop
foreach ($array as $a) {
    if ($a == 5)
        break;
    else
        echo $a . " ";
}
echo "\n";
echo "<br>";
echo "Loop Terminated";
echo "<br>";
print_r($array);
?>