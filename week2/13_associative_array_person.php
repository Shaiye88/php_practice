<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array - Person</title>
</head>
<body>
    <h2>Practice 13: Associative Array</h2>
    <p>Create an associative array containing information about a person.</p>

    <?php
    $info = array(
        "id" => "101",
        "name" => "Mohamed Abdi Ali",
        "age" => 20,
        "address" => "Hodan District",
        "status" => "single",
        "weight" => 160.5
    );

    echo "<pre>";
    print_r($info);
    echo "</pre>";
    ?>
</body>
</html>
