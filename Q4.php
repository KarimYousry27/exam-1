<?php

$numbers = [10, 20, 30, 40, 50];
$sum = 0;
$count = 0;

foreach ($numbers as $number) {
    $sum += $number;
    $count++;
}

if ($count > 0) {
    $average = $sum / $count;
    echo "Average: " . $average;
} else {
    echo "The array is empty.";
}

?>