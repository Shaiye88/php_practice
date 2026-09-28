<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array - Values</title>
</head>
<body>
    <h2>Practice 14: Associative Array Values</h2>
    <p>Use foreach to display the values of an associative array.</p>

    <?php
    $info = array(
        "id" => "101",
        "name" => "Mohamed Abdi Ali",
        "age" => 20,
        "address" => "Hodan District",
        "status" => "single",
        "weight" => 160.5
    );

    echo "Associative array elements:<br>";

    foreach ($info as $value) {
        echo "$value<br>";
    }
    ?>
</body>
</html>
