<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String and Number Operations</title>
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
        footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
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
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>String and Number Operations</h1>

    <?php
        // Initializing five string variables
        $strings = ["apple", "orange", "banana", "grape", "pear"];
        
        // Initializing five integer variables
        $numbers = [10, 25, 5, 12, 5];

        // Function to sort strings in ascending order without using predefined sort functions
        function sortAscending($array) {
            $n = count($array);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = $i + 1; $j < $n; $j++) {
                    if (strcmp($array[$i], $array[$j]) > 0) {
                        // Swap
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }
            return $array;
        }

        // Function to sort strings in descending order without using predefined sort functions
        function sortDescending($array) {
            $n = count($array);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = $i + 1; $j < $n; $j++) {
                    if (strcmp($array[$i], $array[$j]) < 0) {
                        // Swap
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }
            return $array;
        }

        // Sorting strings in ascending and descending order
        $ascendingStrings = sortAscending($strings);
        $descendingStrings = sortDescending($strings);

        // Displaying the sorted strings
        echo "<h2>Five Strings in Ascending Order:</h2>";
        echo "<ul>";
        foreach ($ascendingStrings as $string) {
            echo "<li>$string</li>";
        }
        echo "</ul>";

        echo "<h2>Five Strings in Descending Order:</h2>";
        echo "<ul>";
        foreach ($descendingStrings as $string) {
            echo "<li>$string</li>";
        }
        echo "</ul>";

        // Function to sort numbers in ascending order
        function sortNumbersAscending($array) {
            $n = count($array);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = $i + 1; $j < $n; $j++) {
                    if ($array[$i] > $array[$j]) {
                        // Swap
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }
            return $array;
        }

        // Checking if the first number is divisible by the fifth number
        if ($numbers[0] % $numbers[4] === 0) {
            // Calculate sum, product, and average
            $sum = array_sum($numbers);
            $product = array_product($numbers);
            $average = $sum / count($numbers);

            // Display the sum, product, and average
            echo "<h2>Sum, Product, and Average of the Numbers:</h2>";
            echo "<p>Sum: $sum</p>";
            echo "<p>Product: $product</p>";
            echo "<p>Average: $average</p>";
        } else {
            // Sort the numbers in ascending order
            $ascendingNumbers = sortNumbersAscending($numbers);

            // Display the numbers in ascending order
            echo "<h2>Numbers in Ascending Order:</h2>";
            echo "<ul>";
            foreach ($ascendingNumbers as $number) {
                echo "<li>$number</li>";
            }
            echo "</ul>";
        }
    ?>
        <div class="form-links">
            <input type="return to main page" onclick="window.location.href='index.php'" value="Return to Main Page">
        </div>
    </div>
    <footer>
    <b> Created by: Jolito P. Eliseo </b>- <?php echo date('F j, Y'); ?>
    </footer>
</body>
</html>
