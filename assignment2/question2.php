<!DOCTYPE html>
<html>
<head>
    <title>Question 2</title>
</head>
<body>

    <h1>Question 2</h1>

    <?php
        // Declare a two-dimensional associative array
        $colors = [
            "Light" => [
                "Red" => "Light Red",
                "Green" => "Light Green",
                "Blue" => "Light Blue"
            ],
            "Normal" => [
                "Red" => "Normal Red",
                "Green" => "Normal Green",
                "Blue" => "Normal Blue"
            ],
            "Dark" => [
                "Red" => "Dark Red",
                "Green" => "Dark Green",
                "Blue" => "Dark Blue"
            ]
        ];

        // Print array elements as a table
        echo "<table border='1' cellpadding='8'>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>Red</th>";
        echo "<th>Green</th>";
        echo "<th>Blue</th>";
        echo "</tr>";

        foreach ($colors as $rowName => $row) {
            echo "<tr>";
            echo "<th>" . $rowName . "</th>";
            echo "<td>" . $row["Red"] . "</td>";
            echo "<td>" . $row["Green"] . "</td>";
            echo "<td>" . $row["Blue"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>

</body>
</html>