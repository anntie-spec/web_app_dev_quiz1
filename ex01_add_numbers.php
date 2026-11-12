<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1 - Add Two Numbers</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 350px;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .result {
            font-size: 24px;
            font-weight: bold;
            color: #27ae60;
        }
    </style>
</head>
<body>

<?php
function addNumbers($a, $b) {
    return $a + $b;
}

$x = 15;
$y = 25;
$result = addNumbers($x, $y);
?>

<div class="card">
    <h2>Exercise 1: Add Two Numbers</h2>
    <div class="result">
        <?php echo "$x + $y = $result"; ?>
    </div>
</div>

</body>
</html>