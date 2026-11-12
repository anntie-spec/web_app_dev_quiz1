<?php
function calculateGrade($score) {
    if ($score >= 90) return "A";
    if ($score >= 80) return "B";
    if ($score >= 70) return "C";
    if ($score >= 60) return "D";
    if ($score >= 50) return "E";
    return "F";
}

$output = "";
$grade = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $score = (float) $_POST["score"];

    if ($score < 0 || $score > 100) {
        $output = "❌ Score must be between 0 and 100.";
    } else {
        $grade = calculateGrade($score);
        $output = "$name got $score points.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grade Calculator</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#4facfe,#00f2fe);
}

.container{
    width:420px;
    background:white;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#333;
    margin-bottom:25px;
}

.icon{
    text-align:center;
    font-size:50px;
    margin-bottom:10px;
}

.input-group{
    margin-bottom:18px;
}

label{
    display:block;
    margin-bottom:6px;
    font-weight:600;
    color:#555;
}

input{
    width:100%;
    padding:12px;
    border:2px solid #ddd;
    border-radius:10px;
    font-size:16px;
}

input:focus{
    border-color:#4facfe;
    outline:none;
}

button{
    width:100%;
    padding:14px;
    background:#4facfe;
    border:none;
    border-radius:10px;
    color:white;
    font-size:17px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#2196f3;
    transform:translateY(-2px);
}

.result{
    margin-top:25px;
    padding:20px;
    text-align:center;
    border-radius:12px;
    background:#f5f8ff;
}

.grade{
    font-size:42px;
    font-weight:bold;
    margin-top:10px;
}

.grade-a{color:#28a745;}
.grade-b{color:#20c997;}
.grade-c{color:#ffc107;}
.grade-d{color:#fd7e14;}
.grade-e{color:#dc3545;}
.grade-f{color:#6c757d;}
</style>

</head>
<body>

<div class="container">

    <div class="icon">🎓</div>

    <h2>Student Grade Calculator</h2>

    <form method="post">

        <div class="input-group">
            <label>Student Name</label>
            <input
                type="text"
                name="name"
                placeholder="Enter student name"
                required>
        </div>

        <div class="input-group">
            <label>Score (0 - 100)</label>
            <input
                type="number"
                name="score"
                min="0"
                max="100"
                step="any"
                placeholder="Enter score"
                required>
        </div>

        <button type="submit">Check Grade</button>

    </form>

    <?php if (!empty($output)) : ?>
        <div class="result">

            <p><?php echo $output; ?></p>

            <?php if (!empty($grade)) : ?>
                <div class="grade grade-<?php echo strtolower($grade); ?>">
                    Grade <?php echo $grade; ?>
                </div>
            <?php endif; ?>

        </div>
    <?php endif; ?>

</div>

</body>
</html>