<?php

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 7;

if (isPrime($number)) {
    echo "$number is prime";
} else {
    echo "$number is not prime";
}

?>