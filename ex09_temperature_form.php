<?php

function celsiusToFahrenheit($c) {
    return ($c * 9 / 5) + 32;
}

function fahrenheitToCelsius($f) {
    return ($f - 32) * 5 / 9;
}

$result = "";

if (isset($_GET["temp"])) {

    $temp = (float) $_GET["temp"];

    if ($_GET["type"] == "c2f") {

        $result = "$temp °C = "
                . round(celsiusToFahrenheit($temp), 2)
                . " °F";

    } else {

        $result = "$temp °F = "
                . round(fahrenheitToCelsius($temp), 2)
                . " °C";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Temperature Converter</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#ff9966,#ff5e62);
}

.container{
    width:450px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(15px);
    padding:35px;
    border-radius:25px;
    box-shadow:0 8px 32px rgba(0,0,0,0.2);
    color:white;
}

.icon{
    text-align:center;
    font-size:55px;
    margin-bottom:10px;
}

h2{
    text-align:center;
    margin-bottom:25px;
}

.form-group{
    margin-bottom:18px;
}

input,
select{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    font-size:16px;
    margin-top:5px;
}

input:focus,
select:focus{
    outline:none;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:#00c9a7;
    color:white;
    font-size:17px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#00b491;
    transform:translateY(-2px);
}

.result{
    margin-top:25px;
    padding:18px;
    background:rgba(255,255,255,0.2);
    border-radius:12px;
    text-align:center;
}

.result h3{
    font-size:24px;
}

.info{
    text-align:center;
    font-size:13px;
    margin-top:15px;
    opacity:0.8;
}

</style>
</head>
<body>

<div class="container">

    <div class="icon">🌡️</div>

    <h2>Temperature Converter</h2>

    <form method="get">

        <div class="form-group">
            <input
                type="number"
                step="any"
                name="temp"
                placeholder="Enter Temperature"
                required>
        </div>

        <div class="form-group">
            <select name="type">
                <option value="c2f">🌞 Celsius to Fahrenheit</option>
                <option value="f2c">❄️ Fahrenheit to Celsius</option>
            </select>
        </div>

        <button type="submit">Convert Temperature</button>

    </form>

    <?php if(!empty($result)): ?>
        <div class="result">
            <h3><?php echo $result; ?></h3>
        </div>
    <?php endif; ?>

    <div class="info">
        Convert temperatures instantly using the GET method.
    </div>

</div>

</body>
</html>