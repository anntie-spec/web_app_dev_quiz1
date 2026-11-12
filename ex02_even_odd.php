<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2 - Even or Odd</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #3498db;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .even {
            color: green;
            font-weight: bold;
        }

        .odd {
            color: crimson;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
function checkEvenOdd($number) {
    return ($number % 2 == 0) ? "Even" : "Odd";
}
?>

<div class="container">
    <h2>Exercise 2: Even or Odd</h2>

    <table>
        <tr>
            <th>Number</th>
            <th>Type</th>
        </tr>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            $type = checkEvenOdd($i);
            $class = strtolower($type);

            echo "<tr>
                    <td>$i</td>
                    <td class='$class'>$type</td>
                  </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>