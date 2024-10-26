<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic Calculator</title>
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
        h1, h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        .result {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ccc;
            margin-top: 10px;
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
    </style>
</head>
<body>
<div class="container">
<h1>PHP Basic Calculator</h1>
<p>This calculator performs various mathematical operations using user-defined PHP functions.</p>

<form method="POST">
    <label for="num1">Enter first number:</label>
    <input type="number" step="any" name="num1" required><br><br>

    <label for="num2">Enter second number (if applicable):</label>
    <input type="number" step="any" name="num2"><br><br>

    <label for="operation">Select Operation:</label>
    <select name="operation" required>
        <option value="add">Addition</option>
        <option value="subtract">Subtraction</option>
        <option value="multiply">Multiplication</option>
        <option value="divide">Division</option>
        <option value="modulus">Modulus</option>
        <option value="power">Exponentiation</option>
        <option value="absolute">Absolute Value</option>
        <option value="sqrt">Square Root</option>
        <option value="floor">Floor</option>
        <option value="ceiling">Ceiling</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
// Define functions for each operation
function add($a, $b) { return $a + $b; }
function subtract($a, $b) { return $a - $b; }
function multiply($a, $b) { return $a * $b; }
function divide($a, $b) { return $b != 0 ? $a / $b : "Cannot divide by zero"; }
function modulus($a, $b) { return $a % $b; }
function power($a, $b) { return pow($a, $b); }
function absolute($a) { return abs($a); }
function sqrtValue($a) { return sqrt($a); }
function floorValue($a) { return floor($a); }
function ceilingValue($a) { return ceil($a); }

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = "";

    switch ($operation) {
        case 'add':
            $result = add($num1, $num2);
            break;
        case 'subtract':
            $result = subtract($num1, $num2);
            break;
        case 'multiply':
            $result = multiply($num1, $num2);
            break;
        case 'divide':
            $result = divide($num1, $num2);
            break;
        case 'modulus':
            $result = modulus($num1, $num2);
            break;
        case 'power':
            $result = power($num1, $num2);
            break;
        case 'absolute':
            $result = absolute($num1);
            break;
        case 'sqrt':
            $result = sqrtValue($num1);
            break;
        case 'floor':
            $result = floorValue($num1);
            break;
        case 'ceiling':
            $result = ceilingValue($num1);
            break;
        default:
            $result = "Invalid operation selected";
    }

    echo "<div class='result'><strong>Result:</strong> $result</div>";
}
?>

<h2>Functions Used:</h2>
<ul>
    <li><strong>add(\$a, \$b):</strong> Adds two numbers.</li>
    <li><strong>subtract(\$a, \$b):</strong> Subtracts two numbers.</li>
    <li><strong>multiply(\$a, \$b):</strong> Multiplies two numbers.</li>
    <li><strong>divide(\$a, \$b):</strong> Divides two numbers, prevents division by zero.</li>
    <li><strong>modulus(\$a, \$b):</strong> Finds the remainder when one number is divided by another.</li>
    <li><strong>power(\$a, \$b):</strong> Raises one number to the power of another.</li>
    <li><strong>absolute(\$a):</strong> Returns the absolute value of a number.</li>
    <li><strong>sqrtValue(\$a):</strong> Returns the square root of a number.</li>
    <li><strong>floorValue(\$a):</strong> Returns the largest integer less than or equal to a number.</li>
    <li><strong>ceilingValue(\$a):</strong> Returns the smallest integer greater than or equal to a number.</li>
</ul>
<div class="form-links">
            <input type="return to main page" onclick="window.location.href='index.php'" value="Return to Main Page">
        </div>
</div>
<footer>
    <p>Creator: Your Name</p>
    <p>Date Created: <?php echo date("Y-m-d"); ?></p>
</footer>

</body>
</html>
