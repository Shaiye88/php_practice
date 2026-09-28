<!DOCTYPE html>
<html>
<head>
    <title>Question 1</title>
</head>
<body>

    <h1>Question 1</h1>

    <?php
        // 1. Declare and initialize a one-dimensional array
        $numbers = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

        // 2. Print all elements
        echo "<h2>All Elements</h2>";
        foreach ($numbers as $number) {
            echo $number . " ";
        }

        // Initialize variables
        $total = 0;
        $evenTotal = 0;
        $oddTotal = 0;
        $minimum = $numbers[0];
        $maximum = $numbers[0];
        $minPositions = [];
        $maxPositions = [];

        // 3, 4, 5, 6 and 7
        foreach ($numbers as $index => $number) {
            // Total of all elements
            $total += $number;

            // Total of even elements
            if ($number % 2 == 0) {
                $evenTotal += $number;
            } else {
                // Total of odd elements
                $oddTotal += $number;
            }

            // Minimum element and positions
            if ($number < $minimum) {
                $minimum = $number;
                $minPositions = [$index];
            } elseif ($number == $minimum) {
                $minPositions[] = $index;
            }

            // Maximum element and positions
            if ($number > $maximum) {
                $maximum = $number;
                $maxPositions = [$index];
            } elseif ($number == $maximum) {
                $maxPositions[] = $index;
            }
        }

        echo "<h2>Results</h2>";
        echo "Total of all elements: " . $total . "<br>";
        echo "Total of even elements: " . $evenTotal . "<br>";
        echo "Total of odd elements: " . $oddTotal . "<br>";
        echo "Minimum element: " . $minimum . "<br>";
        echo "Minimum positions: " . implode(", ", $minPositions) . "<br>";
        echo "Maximum element: " . $maximum . "<br>";
        echo "Maximum positions: " . implode(", ", $maxPositions) . "<br>";
    ?>

</body>
</html>