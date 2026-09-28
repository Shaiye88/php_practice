<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop - Multiplication</title>
</head>
<body>
    <h2>Practice 2: While Loop Multiplication</h2>
    <p>Multiply numbers from 1 to 12 by 12 using a while loop.</p>

    <?php
    $count = 1;

    while ($count <= 12) {
        echo "$count times 12 is " . ($count * 12) . "<br>";
        $count++;
    }
    ?>
</body>
</html>
