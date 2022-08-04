<?php include('server.php'); 

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> User Registration Using PHP and MySQL </title>
    <link rel="stylesheet" type="text/css"  href="style.css">
</head>
<body>
<div class="header" style="border-top-right-radius: 10px; border-top-left-radius: 10px">
    <h2>Login</h2>
    </div>

    <form method="post" action="login.php">
        <!--PHP error -->
        <?php include('errors.php'); ?>

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
        </div>


    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
        
    </div>

    <div class="input-group">
    <button name="login" type="submit" class="btn">Login</button>
        </div>

    <p> Not yet a member? 
        <a href="register.php">Sign Up </a> 
    </p>
    </form>
</body>
</html>