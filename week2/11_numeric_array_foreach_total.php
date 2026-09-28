<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Array - Foreach</title>
</head>
<body>
    <h2>Practice 11: Foreach and Numeric Array</h2>
    <p>Use foreach to display array elements and calculate their total.</p>

    <?php
    $numbers = array(10, 10, 15);
    $total = 0;

    echo "Array elements are: ";

    foreach ($numbers as $n) {
        echo "$n, ";
        $total += $n;
    }

    echo "<br>Total of all elements is: $total";
    ?>
</body>
</html>
