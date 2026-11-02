<?php

$colors = ["white", "red", "green", "blue", "yellow"];
$background = "white";

if (isset($_COOKIE["background"])) {
    if (in_array($_COOKIE["background"], $colors, true)) {
        $background = $_COOKIE["background"];
    }
}

if (isset($_POST["color"])) {
    if (in_array($_POST["color"], $colors, true)) {
        $background = $_POST["color"];

        setcookie("background", $background, time() + (86400 * 30), "/");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Background Color</title>
</head>
<body style="background-color: <?php echo $background; ?>;">

    <form method="post">
        <label for="color">Choose a background color:</label>

        <select name="color" id="color">
            <?php foreach ($colors as $color) { ?>
                <option value="<?php echo $color; ?>"
                    <?php if ($background == $color) echo "selected"; ?>>
                    <?php echo ucfirst($color); ?>
                </option>
            <?php } ?>
        </select>

        <button type="submit">Save</button>
    </form>

</body>
</html>