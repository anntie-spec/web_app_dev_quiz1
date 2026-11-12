<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers (1-30)</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            width: 500px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .primes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .prime {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: bold;
            min-width: 45px;
        }
    </style>
</head>
<body>

<?php
function isPrime($n) {
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}
?>

<div class="container">
    <h2>Exercise 4: Prime Numbers (1-30)</h2>

    <div class="primes">
        <?php
        for ($i = 1; $i <= 30; $i++) {
            if (isPrime($i)) {
                echo "<div class='prime'>$i</div>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>