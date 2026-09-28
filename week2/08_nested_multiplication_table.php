<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loops - Multiplication Table</title>
</head>
<body>
    <h2>Practice 8: Nested Loops</h2>
    <p>Use two nested for loops to display a multiplication table from 1 to 12.</p>

    <?php
    for ($i = 1; $i <= 12; $i++) {
        for ($j = 1; $j <= 12; $j++) {
            echo ($i * $j) . " ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>
