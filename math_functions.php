<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions Demo</title>
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
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
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
        <h1>PHP Math Functions Demo</h1>

        <?php
        // Declare variables
        $whole_numbers = [10, 15, 23, 7, 5];
        $floating_numbers = [3.14, 2.71, 1.618, 0.577, 4.669];

        // Display the declared variables
        echo "<h2>Declared Variables</h2>";
        echo "<p>Whole Numbers: " . implode(", ", $whole_numbers) . "</p>";
        echo "<p>Floating Point Numbers: " . implode(", ", $floating_numbers) . "</p>";

        // Perform and demonstrate 15 math functions
        echo "<h2>Math Functions Demonstration</h2>";
        echo "<table>";
        echo "<tr><th>Function</th><th>Result</th></tr>";

        // Math Functions
        echo "<tr><td>abs(-23)</td><td>" . abs(-23) . "</td></tr>";
        echo "<tr><td>ceil(3.14)</td><td>" . ceil(3.14) . "</td></tr>";
        echo "<tr><td>floor(2.71)</td><td>" . floor(2.71) . "</td></tr>";
        echo "<tr><td>round(1.618, 1)</td><td>" . round(1.618, 1) . "</td></tr>";
        echo "<tr><td>sqrt(16)</td><td>" . sqrt(16) . "</td></tr>";
        echo "<tr><td>pow(2, 3)</td><td>" . pow(2, 3) . "</td></tr>";
        echo "<tr><td>max(whole_numbers)</td><td>" . max($whole_numbers) . "</td></tr>";
        echo "<tr><td>min(floating_numbers)</td><td>" . min($floating_numbers) . "</td></tr>";
        echo "<tr><td>sin(30 degrees in radians)</td><td>" . sin(deg2rad(30)) . "</td></tr>";
        echo "<tr><td>cos(60 degrees in radians)</td><td>" . cos(deg2rad(60)) . "</td></tr>";
        echo "<tr><td>tan(45 degrees in radians)</td><td>" . tan(deg2rad(45)) . "</td></tr>";
        echo "<tr><td>log(100)</td><td>" . log(100) . "</td></tr>";
        echo "<tr><td>exp(1)</td><td>" . exp(1) . "</td></tr>";
        echo "<tr><td>rand()</td><td>" . rand() . "</td></tr>";
        echo "<tr><td>deg2rad(180)</td><td>" . deg2rad(180) . "</td></tr>";

        echo "</table>";
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
