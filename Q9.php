<?php

$text = "I am learning PHP";
$search = "PHP";

$pattern = "/" . preg_quote($search, "/") . "/";

if (preg_match($pattern, $text)) {
    echo "String found";
} else {
    echo "String not found";
}

?>