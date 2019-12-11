<?php
$file = fopen("day1.txt", "r");
$floors = fgets($file);
fclose($file);

$down = substr_count($floors, '(');
$up = substr_count($floors, ')');

echo $down . "\n";
echo $up . "\n";

echo ($down - $up) . "\n";