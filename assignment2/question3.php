<!DOCTYPE html>
<html>
<head>
    <title>Question 3</title>
</head>
<body>

    <h1>Question 3</h1>

    <?php
        // Declare a two-dimensional associative array
        $students = [
            "CA221" => [
                "Name" => "Mohamed Ahmed Ali",
                "Phone" => "0648440403",
                "Address" => "Laba Dhagax, Wardhiigley"
            ],
            "CA223" => [
                "Name" => "Ahmed Abdi Jama",
                "Phone" => "0647223201",
                "Address" => "Taleex, Hodan"
            ],
            "CA221-2" => [
                "Name" => "Amina Nur Adan",
                "Phone" => "0646990276",
                "Address" => "Macmacaanka, Dharkeynley"
            ]
        ];

        // Print array elements as a table
        echo "<table border='1' cellpadding='8'>";
        echo "<tr>";
        echo "<th>Student ID</th>";
        echo "<th>Name</th>";
        echo "<th>Phone</th>";
        echo "<th>Address</th>";
        echo "</tr>";

        foreach ($students as $id => $student) {
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $student["Name"] . "</td>";
            echo "<td>" . $student["Phone"] . "</td>";
            echo "<td>" . $student["Address"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>

</body>
</html>