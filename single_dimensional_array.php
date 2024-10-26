<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Webpage</title>
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
            border-collapse: collapse;
            width: 80%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
            text-align : center;
        }
        
    </style>
</head>
<body>
    <div class="container">
    <h1>Parallel Arrays</h1>
        <?php
        // Parallel arrays to store information about students
        $names = ["MOISES", "RAYMART", "KRISTINE", "ROSALIE", "MARTINITA"];
        $ages = [20, 22, 19, 25, 67];
        $sexes = ["Male", "Male", "Female", "Female", "Female"];
        $nationalities = ["Filipino", "British", "Australian", "German", "French"];

        // Function to sort people by name and return sorted parallel arrays
        function sortPeople($names, $ages, $sexes, $nationalities) {
            // Combine the arrays into an associative array
            $people = [];
            for ($i = 0; $i < count($names); $i++) {
                $people[] = [
                    'name' => $names[$i],
                    'age' => $ages[$i],
                    'sex' => $sexes[$i],
                    'nationality' => $nationalities[$i]
                ];
            }

            // Sort the associative array by name
            usort($people, function ($a, $b) {
                return strcmp($a['name'], $b['name']);
            });

            // Separate the sorted data back into parallel arrays
            $sortedNames = [];
            $sortedAges = [];
            $sortedSexes = [];
            $sortedNationalities = [];

            foreach ($people as $person) {
                $sortedNames[] = $person['name'];
                $sortedAges[] = $person['age'];
                $sortedSexes[] = $person['sex'];
                $sortedNationalities[] = $person['nationality'];
            }

            return [
                'names' => $sortedNames,
                'ages' => $sortedAges,
                'sexes' => $sortedSexes,
                'nationalities' => $sortedNationalities
            ];
        }

        // Display unsorted lists
        echo "<h2>Unsorted List</h2>";
        echo "<table>";
        echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
        for ($i = 0; $i < count($names); $i++) {
            echo "<tr>
                    <td>{$names[$i]}</td>
                    <td>{$ages[$i]}</td>
                    <td>{$sexes[$i]}</td>
                    <td>{$nationalities[$i]}</td>
                  </tr>";
        }
        echo "</table>";

        // Sort the arrays by name
        $sortedData = sortPeople($names, $ages, $sexes, $nationalities);

        // Display sorted lists
        echo "<h2>Sorted List (by Name)</h2>";
        echo "<table>";
        echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
        for ($i = 0; $i < count($sortedData['names']); $i++) {
            echo "<tr>
                    <td>{$sortedData['names'][$i]}</td>
                    <td>{$sortedData['ages'][$i]}</td>
                    <td>{$sortedData['sexes'][$i]}</td>
                    <td>{$sortedData['nationalities'][$i]}</td>
                  </tr>";
        }
        echo "</table>";
        ?>
        <div class="form-links">
            <input type="return to main page" onclick="window.location.href='index.html'" value="Return to Main Page">
        </div>
</div>
    </div>
</body>
</html>
