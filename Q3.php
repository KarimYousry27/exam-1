<?php

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < 9 - $i; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}

echo "Ascending: ";

foreach ($array as $number) {
    echo $number . " ";
}

for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < 9 - $i; $j++) {
        if ($array[$j] < $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}

echo "<br>Descending: ";

foreach ($array as $number) {
    echo $number . " ";
}
?>