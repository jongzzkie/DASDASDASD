<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array Statistics</title>
    <style>
        body { /* Corrected from .body to body */
            font-family: Arial, sans-serif;
            background: linear-gradient(90deg, rgb(133, 125, 125) 0%, rgb(240, 255, 255) 35%, rgb(6, 106, 126) 100%);
            background-size: 200% 200%;
            animation: animate-background 10s infinite ease-in-out;
        }
        @keyframes animate-background { /* Corrected typo */
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: transparent;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #333;
        }
        .table-container {
            display: inline-block;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            margin: auto;
            width: 100%;
        }
        table, th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="RETURN TO MAIN PAGE"] {
             background-color: white;
           color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            }
        input[type="RETURN TO MAIN PAGE"]:hover {
            background-color: red;
            }
        footer {
            margin-top: 20px;
            font-size: 12px;
            text-align: center;
        }
        <div class="form-links">
            <input type="return to main page" onclick="window.location.href='index.html'" value="Return to Main Page">
        </div>
    </style>
</head>
<body>
    <div class= "container">
        <h1>Two-dimensional Array Statistics</h1>

        <form method="POST">
            <label for="size">Enter the size of the array (N x N):</label>
            <input type="number" id="size" name="size" min="2" max="20" required>
            <button type="submit">Generate Array</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["size"])) {
            $n = (int)$_POST["size"];
            $matrix = [];
            
            // Generate NxN matrix with random integers
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    $matrix[$i][$j] = rand(1, 100);
                }
            }

            // Initialize variables for statistics
            $rowSums = $colSums = array_fill(0, $n, 0);
            $rowMins = $rowMaxs = $colMins = $colMaxs = array_fill(0, $n, 0);
            $overallSum = 0;
            $overallMin = PHP_INT_MAX;
            $overallMax = PHP_INT_MIN;
            $mainDiagonalSum = $secondaryDiagonalSum = 0;

            // Calculate statistics
            for ($i = 0; $i < $n; $i++) {
                $rowMins[$i] = PHP_INT_MAX;
                $rowMaxs[$i] = PHP_INT_MIN;
                $colMins[$i] = PHP_INT_MAX;
                $colMaxs[$i] = PHP_INT_MIN;
                
                for ($j = 0; $j < $n; $j++) {
                    $value = $matrix[$i][$j];
                    $rowSums[$i] += $value;
                    $colSums[$j] += $value;
                    $overallSum += $value;
                    $overallMin = min($overallMin, $value);
                    $overallMax = max($overallMax, $value);

                    // Track min and max for rows and columns
                    $rowMins[$i] = min($rowMins[$i], $value);
                    $rowMaxs[$i] = max($rowMaxs[$i], $value);
                    $colMins[$j] = min($colMins[$j], $value);
                    $colMaxs[$j] = max($colMaxs[$j], $value);

                    // Diagonals
                    if ($i == $j) $mainDiagonalSum += $value;
                    if ($i + $j == $n - 1) $secondaryDiagonalSum += $value;
                }
            }

            // Calculate averages
            $rowAverages = array_map(fn($sum) => $sum / $n, $rowSums);
            $colAverages = array_map(fn($sum) => $sum / $n, $colSums);
            $mainDiagonalAverage = $mainDiagonalSum / $n;
            $secondaryDiagonalAverage = $secondaryDiagonalSum / $n;
            $overallAverage = $overallSum / ($n * $n);

            // Display the matrix and statistics
            echo "<div class='table-container'>";
            echo "<h2>Generated Matrix</h2>";
            echo "<table><tbody>";
            foreach ($matrix as $row) {
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table></div>";

            echo "<h2>Statistics</h2>";
            echo "<h3>Row and Column Sums and Averages</h3>";
            for ($i = 0; $i < $n; $i++) {
                echo "Row " . ($i + 1) . ": Sum = " . $rowSums[$i] . ", Average = " . round($rowAverages[$i], 2) . "<br>";
                echo "Column " . ($i + 1) . ": Sum = " . $colSums[$i] . ", Average = " . round($colAverages[$i], 2) . "<br>";
            }

            echo "<h3>Diagonal Sums and Averages</h3>";
            echo "Main Diagonal: Sum = $mainDiagonalSum, Average = " . round($mainDiagonalAverage, 2) . "<br>";
            echo "Secondary Diagonal: Sum = $secondaryDiagonalSum, Average = " . round($secondaryDiagonalAverage, 2) . "<br>";

            echo "<h3>Min and Max Values for Each Row and Column</h3>";
            for ($i = 0; $i < $n; $i++) {
                echo "Row " . ($i + 1) . ": Min = " . $rowMins[$i] . ", Max = " . $rowMaxs[$i] . "<br>";
                echo "Column " . ($i + 1) . ": Min = " . $colMins[$i] . ", Max = " . $colMaxs[$i] . "<br>";
            }

            echo "<h3>Overall Statistics</h3>";
            echo "Overall Sum = $overallSum<br>";
            echo "Overall Average = " . round($overallAverage, 2) . "<br>";
            echo "Overall Minimum = $overallMin<br>";
            echo "Overall Maximum = $overallMax<br>";
        }
        ?>
        <div class="form-links">
            <input type="return to main page" onclick="window.location.href='index.php'" value="Return to Main Page">
        </div>
    </div>

    <footer>
        <p>Created by: Your Name - <?php echo date("F j, Y"); ?></p>
    </footer>
</body>
</html>
