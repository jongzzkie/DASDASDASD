<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables Example</title>
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
    
        h1 {
            text-align: center;
        }
        .content {
            margin-bottom: 50px;
        }
        footer {
            text-align: center;
            font-size: 12px;
            position: fixed;
            bottom: 10px;
            width: 100%;
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
            }ground-color: black;
    </style>
</head>
<body>

    <h1>PHP Variable Declaration Example</h1>
    <div class="container">
        <div class="content">
            <?php
            // Declare whole numbers
            $whole_num1 = 10;
            $whole_num2 = 25;
            $whole_num3 = 50;
            $whole_num4 = 100;
            $whole_num5 = 200;

            // Declare floating point numbers
            $float_num1 = 10.5;
            $float_num2 = 20.99;
            $float_num3 = 30.75;
            $float_num4 = 40.25;
            $float_num5 = 50.5;

            // Declare strings
            $string1 = "Item 1: Laptop";
            $string2 = "Item 2: Smartphone";
            $string3 = "Item 3: Tablet";
            $string4 = "Item 4: Monitor";
            $string5 = "Item 5: Keyboard";

            // Declare characters (representing item codes)
            $char1 = 'L';
            $char2 = 'S';
            $char3 = 'T';
            $char4 = 'M';
            $char5 = 'K';

            // Display values
            echo "<h3>Whole Numbers (Quantities):</h3>";
            echo "Quantity of item 1: $whole_num1<br>";
            echo "Quantity of item 2: $whole_num2<br>";
            echo "Quantity of item 3: $whole_num3<br>";
            echo "Quantity of item 4: $whole_num4<br>";
            echo "Quantity of item 5: $whole_num5<br>";

            echo "<h3>Floating Point Numbers (Prices):</h3>";
            echo "Price of item 1: $$float_num1<br>";
            echo "Price of item 2: $$float_num2<br>";
            echo "Price of item 3: $$float_num3<br>";
            echo "Price of item 4: $$float_num4<br>";
            echo "Price of item 5: $$float_num5<br>";

            echo "<h3>Strings (Descriptions):</h3>";
            echo "$string1<br>";
            echo "$string2<br>";
            echo "$string3<br>";
            echo "$string4<br>";
            echo "$string5<br>";

            echo "<h3>Characters (Item Codes):</h3>";
            echo "Code for item 1: $char1<br>";
            echo "Code for item 2: $char2<br>";
            echo "Code for item 3: $char3<br>";
            echo "Code for item 4: $char4<br>";
            echo "Code for item 5: $char5<br>";
            ?>
            <div class="form-links">
                <input type="return to main page" onclick="window.location.href='index.php'" value="Return to Main Page">
            </div>
        </div>
    </div>
    <footer>
    <b> Created by: Jolito P. Eliseo </b>- <?php echo date('F j, Y'); ?>
    </footer>

</body>
</html>
