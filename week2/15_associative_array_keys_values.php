<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array - Keys and Values</title>
</head>
<body>
    <h2>Practice 15: Associative Array Keys and Values</h2>
    <p>Use foreach with key => value to display both keys and values.</p>

    <?php
    $info = array(
        "id" => "101",
        "name" => "Mohamed Abdi Ali",
        "age" => 20,
        "address" => "Hodan District",
        "status" => "single",
        "weight" => 160.5
    );

    echo "Printing array key/value pairs:<br>";

    foreach ($info as $key => $value) {
        echo "[$key]: $value<br>";
    }
    ?>
</body>
</html>
