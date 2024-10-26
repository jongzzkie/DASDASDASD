<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        /* Full-screen body with gradient background */
        body {
            margin: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: linear-gradient(90deg, rgb(90, 233, 238) 0%, rgb(162, 236, 236) 35%, rgba(0, 212, 255, 1) 100%);
            font-family: Arial, sans-serif;
        }

        /* Heading styling */
        h1, h2, h3 {
            color: #000000;
            text-align: inline;
        }

        h1 {
            padding-top: 20px;
        }

        /* Box div elements to animate */
        .box div {
            position: absolute;
            width: 60px;
            height: 60px;
            background-color: transparent;
            border: 6px solid rgba(250, 7, 7, 0.8);
            border-radius: 50%;
        }

        /* Animations for each child box */
        .box div:nth-child(1) {
            top: 12%;
            left: 42%;
            animation: animate 10s linear infinite;
        }

        .box div:nth-child(2) {
            top: 70%;
            left: 50%;
            animation: animate 7s linear infinite;
        }

        .box div:nth-child(3) {
            top: 17%;
            left: 6%;
            animation: animate 6s linear infinite;
        }

        .box div:nth-child(4) {
            top: 20%;
            left: 60%;
            animation: animate 10s linear infinite;
        }

        .box div:nth-child(5) {
            top: 70%;
            left: 80%;
            animation: animate 12s linear infinite;
        }

        .box div:nth-child(6) {
            top: 60%;
            left: 80%;
            animation: animate 15s linear infinite;
        }

        .box div:nth-child(7) {
            top: 32%;
            left: 25%;
            animation: animate 16s linear infinite;
        }

        .box div:nth-child(8) {
            top: 90%;
            left: 25%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(9) {
            top: 40%;
            left: 80%;
            animation: animate 5s linear infinite;
        }

        .box div:nth-child(10) {
            top: 20%;
            left: 30%;
            animation: animate 13s linear infinite;
        }.box div:nth-child(11) {
            top: 20%;
            left: 30%;
            animation: animate 13s linear infinite;
        }
        .box div:nth-child(12) {
            top: 20%;
            left: 30%;
            animation: animate 13s linear infinite;
        }
        .box div:nth-child(13) {
            top: 20%;
            left: 30%;
            animation: animate 13s linear infinite;
        }.box div:nth-child(14) {
            top: 20%;
            left: 30%;
            animation: animate 13s linear infinite;
        }
        .box div:nth-child(15) {
            top: 20%;
            left: 30%;
            animation: animate 13s linear infinite;
        }
        /* Keyframes for animations */
        @keyframes animate {
            0% {
                transform: scale(0) translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: scale(1.3) translateY(-90px) rotate(360deg);
                opacity: 0;
            }
        }   

        /* Button styling */
        ul {
            list-style-type: none;
            padding: 0;
        }

        a {
            display: inline-block;
            text-align: center;
            width: 15em;
            height: 3em;
            line-height: 3em;
            border-radius: 50em;
            font-size: 15px;
            font-family: inherit;
            color: black;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
            margin-bottom: 10px;
        }

        a::before {
            content: '';
            width: 0;
            height: 3em;
            border-radius: 30em;
            position: absolute;
            top: 0;
            left: 0;
            background-image: linear-gradient(to right, #0fd850 0%, #f9f047 100%);
            transition: .5s ease;
            display: block;
            z-index: -1;
        }

        a:hover::before {
            width: 9em;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: transparent;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex; /* Enable Flexbox */
            justify-content: space-between; /* Space between columns */
            align-items: flex-start; /* Align columns to the start */
        }

        .col1 {
            flex: 1; /* Allow col1 to grow */
            margin-right: 20px; /* Space between columns */
        }

        .col2 {
            flex: 2; /* Allow col2 to grow larger */
        }



        
    </style>
</head>
<body>
    <div class="box">
        <!-- Floating animated elements -->
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="container">
        <div class = "col1">
            <ul>
                <li><a href="cv.php">1. Curriculum Vitae</a></li>
                <li><a href="TheUseOfVariables.php">2. The Use of Variables</a></li>
                <li><a href="manipulating_numbers.php">3. Manipulating Numbers</a></li>
                <li><a href="math_functions.php">4. Using Math Functions</a></li>
                <li><a href="constants.php">5. Using Constants</a></li>
                <li><a href="selection_statements.php">6. Selection Statements</a></li>
                <li><a href="loop_statements.php">7. Loop Statements</a></li>
                <li><a href="user_defined_functions.php">8. User-defined Functions</a></li>
                <li><a href="single_dimensional_array.php">9. Single-dimensional Array</a></li>
                <li><a href="two_dimensional_array.php">10. Two-dimensional Array</a></li>
            </ul>
        </div>
        <div class="col2">
            <img src= 'imageofme.jpg' alt="A beautiful scenery" width="200" height="150"> 
            <h2>Your Name: Jolito P. Eliseo</h2>
            <h2>Course/Yr/Section: BSIS III A</h2>
            <h2>Date: (October 25, 2024)</h2>
        </div>
        
    </div>
</body>
</html>