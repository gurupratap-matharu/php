<?php
 function longdate($timestamp)
 {
    return date("l F jS Y", $timestamp);
 }
echo time();

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

$time = longdate(time());
$tomorrow = longdate(time() + 24 * 60 * 60);
echo "<h1>$time</h1>";
echo "<h1>Tomorrow is $tomorrow.</h1>"
?>
