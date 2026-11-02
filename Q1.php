<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chessboard</title>
</head>
<body>
<table style="border-collapse: collapse; border: 1px solid black;">
    <?php
    for ($row = 0; $row < 8; $row++) {
        echo "<tr>";

        for ($col = 0; $col < 8; $col++) {
            if (($row + $col) % 2 == 0) {
                $color = "white";
            } else {
                $color = "black";
            }

            echo "<td style='width: 50px; height: 50px; background-color: $color;'></td>";
        }

        echo "</tr>";
    }
    ?>
</table>
</body>
</html>