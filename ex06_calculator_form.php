<?php
function calculate($a, $b, $op) {
    switch ($op) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            return $b != 0 ? $a / $b : "Cannot divide by zero";
        default:
            return "Invalid operator";
    }
}

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (float) $_POST["num1"];
    $b = (float) $_POST["num2"];
    $op = $_POST["operator"];

    $result = calculate($a, $b, $op);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercise 6 - Calculator</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#667eea,#764ba2);
}

.calculator{
    width:400px;
    padding:30px;
    border-radius:20px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(15px);
    box-shadow:0 8px 32px rgba(0,0,0,0.2);
    color:white;
}

.calculator h2{
    text-align:center;
    margin-bottom:25px;
    font-size:28px;
}

.input-group{
    margin-bottom:20px;
}

input, select{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    outline:none;
    font-size:16px;
    margin-top:5px;
}

.operator-row{
    margin:15px 0;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:#00c9a7;
    color:white;
    font-size:18px;
    cursor:pointer;
    transition:0.3s;
    font-weight:bold;
}

button:hover{
    background:#00b393;
    transform:translateY(-2px);
}

.result{
    margin-top:25px;
    text-align:center;
    background:rgba(255,255,255,0.2);
    padding:18px;
    border-radius:12px;
    font-size:22px;
    font-weight:bold;
}

.icon{
    font-size:40px;
    text-align:center;
    margin-bottom:10px;
}
</style>

</head>
<body>

<div class="calculator">

    <div class="icon">🧮</div>

    <h2>Simple Calculator</h2>

    <form method="post">

        <div class="input-group">
            <label>First Number</label>
            <input
                type="number"
                step="any"
                name="num1"
                placeholder="Enter first number"
                required>
        </div>

        <div class="operator-row">
            <label>Operation</label>
            <select name="operator">
                <option value="+">Addition (+)</option>
                <option value="-">Subtraction (-)</option>
                <option value="*">Multiplication (×)</option>
                <option value="/">Division (÷)</option>
            </select>
        </div>

        <div class="input-group">
            <label>Second Number</label>
            <input
                type="number"
                step="any"
                name="num2"
                placeholder="Enter second number"
                required>
        </div>

        <button type="submit">Calculate</button>

    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <div class="result">
            Result: <?= $result ?>
        </div>
    <?php endif; ?>

</div>

</body>
</html>