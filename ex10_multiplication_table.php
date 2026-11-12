<?php

function multiplicationTable($n, $limit = 12) {
    $html = "";

    for ($i = 1; $i <= $limit; $i++) {
        $result = $n * $i;

        $html .= "
        <tr>
            <td>$n × $i</td>
            <td>$result</td>
        </tr>";
    }

    return $html;
}

$table = "";
$number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = (int) $_POST["number"];
    $table = multiplicationTable($number);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiplication Table Generator</title>

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
    background:linear-gradient(135deg,#00c6ff,#0072ff);
    padding:20px;
}

.container{
    width:550px;
    background:white;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

.icon{
    font-size:55px;
    text-align:center;
    margin-bottom:10px;
}

h2{
    text-align:center;
    color:#333;
    margin-bottom:25px;
}

.form-group{
    margin-bottom:20px;
}

input{
    width:100%;
    padding:12px;
    border:2px solid #ddd;
    border-radius:10px;
    font-size:16px;
}

input:focus{
    border-color:#0072ff;
    outline:none;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:#0072ff;
    color:white;
    font-size:17px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#0059d6;
    transform:translateY(-2px);
}

.table-container{
    margin-top:25px;
}

table{
    width:100%;
    border-collapse:collapse;
    overflow:hidden;
    border-radius:10px;
}

th{
    background:#0072ff;
    color:white;
    padding:12px;
}

td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid #eee;
}

tr:nth-child(even){
    background:#f8f9ff;
}

tr:hover{
    background:#eaf2ff;
}

.title-result{
    margin:20px 0 10px;
    text-align:center;
    font-size:20px;
    color:#333;
    font-weight:bold;
}

</style>
</head>
<body>

<div class="container">

    <div class="icon">✖️</div>

    <h2>Multiplication Table Generator</h2>

    <form method="post">

        <div class="form-group">
            <input
                type="number"
                name="number"
                placeholder="Enter a number"
                required
                value="<?php echo $number; ?>">
        </div>

        <button type="submit">
            Generate Table
        </button>

    </form>

    <?php if($table): ?>

        <div class="title-result">
            Table of <?php echo $number; ?>
        </div>

        <div class="table-container">
            <table>

                <thead>
                    <tr>
                        <th>Calculation</th>
                        <th>Result</th>
                    </tr>
                </thead>

                <tbody>
                    <?php echo $table; ?>
                </tbody>

            </table>
        </div>

    <?php endif; ?>

</div>

</body>
</html>