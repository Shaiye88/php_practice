<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While - Factorial</title>
</head>
<body>
    <h2>Practice 4: Do...While Loop</h2>
    <p>Calculate and display the factorial of 5 using a do...while loop.</p>

    <?php
    $result = 1;
    $n = 5;

    do {
        $result *= $n;
        $n--;
    } while ($n > 0);

    echo "Factorial of 5 is: $result";
    ?>
</body>
</html>
