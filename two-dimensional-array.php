<?php

// Veer we want to declare a 2-D array.
$oxo = array(array('x', ' ', 'o'),
             array('o', ' ', 'x'),
             array('x', 'o', ' '));


echo $oxo[1][2];
echo "<br>";
$j= 10;
echo "10 + 2 = ";
echo $j + 2;
echo "<br>";

echo "10 - 4 = ";
echo $j - 4;
echo "<br>";

echo "10 * 8 = ";
echo $j * 8;
echo "<br>";

echo "10 / 2 = ";
echo $j / 2;
echo "<br>";

echo "10 % 4 = ";
echo $j % 4;
echo "<br>";

echo "increment j = ";
echo ++$j;
echo "<br>";

echo "decrement j = ";
echo --$j;
echo "<br>";

$count = 5;
$count += 1;

echo $count;
echo "<br>";


echo $j > 5;
echo ($j == 100);
echo "";
?>
