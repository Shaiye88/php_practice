<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>

    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: lightgray;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

<h2>Multiplication Table</h2>

<table>

    <!-- First row -->
    <tr>
        <th></th>

        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>

    <?php
    // Create rows
    for ($i = 1; $i <= 12; $i++) {

        echo "<tr>";

        // Row number
        echo "<th>$i</th>";

        // Create columns
        for ($j = 1; $j <= 12; $j++) {

            $result = $i * $j;

            echo "<td>$result</td>";
        }

        echo "</tr>";
    }
    ?>

</table>

</body>
</html>