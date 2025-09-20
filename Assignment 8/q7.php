<?php
$array = [1, 2, 3, 4, 5];
$insert = '$';
$position = 3; 

array_splice($array, $position, 0, $insert);

echo "Original array :<br>1 2 3 4 5<br>";
echo "After inserting '\$' the array is :<br>";
echo implode(' ', $array);
?>
