<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3 - Factorial</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: #fff;
            width: 450px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
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
            background-color: #2575fc;
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .factorial {
            color: #27ae60;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// Exercise 3 (Function): Factorial using recursion
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

$numbers = [3, 5, 7, 10];
?>

<div class="container">
    <h2>Exercise 3: Factorial</h2>

    <table>
        <tr>
            <th>Number</th>
            <th>Factorial</th>
        </tr>

        <?php foreach ($numbers as $n) { ?>
            <tr>
                <td><?php echo $n; ?></td>
                <td class="factorial">
                    <?php echo $n . "! = " . factorial($n); ?>
                </td>
            </tr>
        <?php } ?>

    </table>
</div>

</body>
</html>