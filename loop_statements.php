<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Task</title>
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
        table {
            width: 50%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
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
<div class= "container">
<form method="POST">
    <label for="n">Enter first number (n):</label>
    <input type="number" step="any" name="n" required><br><br>

    <label for="m">Enter second number (m):</label>
    <input type="number" step="any" name="m" required><br><br>

    <input type="submit" name="submit" value="Generate Results">
</form>

<?php
    if (isset($_POST['submit'])) {
        // Get values from form
        $n = (int)$_POST['n'];
        $m = (int)$_POST['m'];
    }
    // 1. Display n x m multiplication table using for loop
    echo "<h3>Multiplication Table of n x m ($n x $m)</h3>";
    echo "<table>";
    echo "<tr><th></th>";
    for ($i = 1; $i <= $m; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";
    
    for ($i = 1; $i <= $n; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 1; $j <= $m; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // 2. Display n Fibonacci series and m Fibonacci series using while loop
    function fibonacci($length) {
        $fibo = [0, 1];
        $i = 2;
        while ($i < $length) {
            $fibo[] = $fibo[$i - 1] + $fibo[$i - 2];
            $i++;
        }
        return $fibo;
    }

    echo "<h3>Fibonacci Series for n ($n)</h3>";
    $fibo_n = fibonacci($n);
    echo implode(", ", $fibo_n);

    echo "<h3>Fibonacci Series for m ($m)</h3>";
    $fibo_m = fibonacci($m);
    echo implode(", ", $fibo_m);

    // 3. Compute factorial of n and summation of m using do...while loop
    function factorial($num) {
        $result = 1;
        $i = $num;
        do {
            $result *= $i;
            $i--;
        } while ($i > 0);
        return $result;
    }

    function summation($num) {
        $sum = 0;
        $i = 1;
        do {
            $sum += $i;
            $i++;
        } while ($i <= $num);
        return $sum;
    }

    echo "<h3>Factorial of n ($n)</h3>";
    echo "Factorial of $n is: " . factorial($n);

    echo "<h3>Summation of m ($m)</h3>";
    echo "Summation of $m is: " . summation($m);
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
