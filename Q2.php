<?php
echo "<h3>Shape 1</h3>";
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    for ($space = 1; $space <= 5 - $i; $space++) {
        echo " ";
    }
    for ($star = 1; $star <= $i; $star++) {
        echo "* ";
    }
    echo "\n";
}
for ($i = 4; $i >= 1; $i--) {
    for ($space = 1; $space <= 5 - $i; $space++) {
        echo " ";
    }
    for ($star = 1; $star <= $i; $star++) {
        echo "* ";
    }
    echo "\n";
}
echo "</pre>";
echo "<h3>Shape 2</h3>";
echo "<pre>";
for ($i = 1; $i <= 6; $i++) {
    for ($star = 1; $star <= $i; $star++) {
        echo "* ";
    }
    echo "\n";
}
for ($i = 5; $i >= 1; $i--) {
    for ($star = 1; $star <= $i; $star++) {
        echo "* ";
    }
    echo "\n";
}
echo "</pre>";
echo "<h3>Shape 3</h3>";
echo "<pre>";
for ($i = 1; $i <= 5; $i += 2) {
    for ($star = 1; $star <= $i; $star++) {
        echo "* ";
    }
    echo "\n";
}
for ($i = 3; $i >= 1; $i -= 2) {
    for ($star = 1; $star <= $i; $star++) {
        echo "* ";
    }
    echo "\n";
}
echo "</pre>";
?>