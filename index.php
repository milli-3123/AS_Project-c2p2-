<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>Crust & Craft Pizzeria</h1>
        <img src="logo1.png" alt="College Logo" width="200" height="150">
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <form name="login_form" class="login-form" action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login" name="login_user" >
        </form>
    </div>
</body>
</html>
