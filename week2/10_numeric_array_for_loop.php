<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Array - For Loop</title>
</head>
<body>
    <h2>Practice 10: Numeric Array with For Loop</h2>
    <p>Store person information in a numeric array and display every value using a for loop.</p>

    <?php
    $info = array(
        "101",
        "Mohamed Abdi Ali",
        20,
        "Hodan District",
        "single"
    );

    echo "Array values using for loop:<br>";

    for ($i = 0; $i < count($info); $i++) {
        echo $info[$i] . "<br>";
    }
    ?>
</body>
</html>
