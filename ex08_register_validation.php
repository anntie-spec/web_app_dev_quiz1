<?php
function clean($data) {
    return htmlspecialchars(trim($data));
}

$errors = [];
$success = "";
$name = $email = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = clean($_POST["name"]);
    $email = clean($_POST["email"]);
    $age   = clean($_POST["age"]);

    if ($name == "") {
        $errors[] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid.";
    }

    if (!is_numeric($age) || $age < 1 || $age > 120) {
        $errors[] = "Age must be between 1 and 120.";
    }

    if (empty($errors)) {
        $success = "Registration successful! Welcome, $name 🎉";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>

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
    background:linear-gradient(135deg,#6a11cb,#2575fc);
    padding:20px;
}

.container{
    width:420px;
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 15px 35px rgba(0,0,0,0.2);
}

.icon{
    font-size:50px;
    text-align:center;
    margin-bottom:10px;
}

h2{
    text-align:center;
    color:#333;
    margin-bottom:25px;
}

.form-group{
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
    transition:0.3s;
}

input:focus{
    border-color:#2575fc;
    outline:none;
    box-shadow:0 0 8px rgba(37,117,252,0.3);
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:#2575fc;
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#1d65d6;
    transform:translateY(-2px);
}

.error{
    background:#ffe5e5;
    color:#d63031;
    padding:12px;
    border-left:5px solid #d63031;
    border-radius:8px;
    margin-bottom:10px;
}

.success{
    background:#eafaf1;
    color:#27ae60;
    padding:15px;
    border-left:5px solid #27ae60;
    border-radius:8px;
    margin-bottom:15px;
    font-weight:bold;
}

.footer{
    text-align:center;
    margin-top:15px;
    font-size:13px;
    color:#888;
}
</style>
</head>
<body>

<div class="container">

    <div class="icon">📝</div>

    <h2>Registration Form</h2>

    <?php foreach($errors as $e): ?>
        <div class="error">
            ❌ <?php echo $e; ?>
        </div>
    <?php endforeach; ?>

    <?php if($success): ?>
        <div class="success">
            ✅ <?php echo $success; ?>
        </div>
    <?php endif; ?>

    <form method="post">

        <div class="form-group">
            <label>Full Name</label>
            <input
                type="text"
                name="name"
                placeholder="Enter your name"
                value="<?php echo $name; ?>">
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                value="<?php echo $email; ?>">
        </div>

        <div class="form-group">
            <label>Age</label>
            <input
                type="number"
                name="age"
                placeholder="Enter your age"
                value="<?php echo $age; ?>">
        </div>

        <button type="submit">Register</button>

    </form>

    <div class="footer">
        Exercise 8 • Registration Form Validation
    </div>

</div>

</body>
</html>
