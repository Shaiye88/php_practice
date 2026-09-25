<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
</head>
<body>

<?php

for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= 5; $j++) {

        $result = $i * $j;

        echo "Row $i, Column $j , Result is $result <br>";
    }

}

?>

</body>
</html>