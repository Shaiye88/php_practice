<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions - Basic</title>
</head>
<body>
    <h2>Practice 16: Basic Array Functions</h2>
    <p>Practice is_array(), in_array(), and count().</p>

    <?php
    $info = array("Mohamed", "Ahmed", "Jaamac", 21);

    if (is_array($info)) {
        echo "Yes, it is an array<br>";
    } else {
        echo "No, it is not an array<br>";
    }

    if (in_array("Ahmed", $info)) {
        echo "Ahmed exists in the array<br>";
    } else {
        echo "Ahmed does not exist in the array<br>";
    }

    echo "Number of elements: " . count($info);
    ?>
</body>
</html>
