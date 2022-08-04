<?php include('server.php');
    
 ?>

<?php 
    if (empty($_SESSION['email'])) {
        header('location : login.php');

    }
    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> User Registration Using PHP and MySQL </title>
    <link rel="stylesheet" type="text/css"  href="style.css">
</head>
<body>
<div class="header" style="border-top-right-radius: 10px; border-top-left-radius: 10px">
    <h2>Home Page</h2>
    </div>

    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3> 
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
        <?php endif ?>

        <?php if (isset($_SESSION["username"])): ?>
            <p> Welcome <strong><?php echo $_SESSION['username']; ?></strong>
            </p>

            <p> 
                <a href="register.php" style="color: red;">Logout </a> 
            </p>
        <?php endif ?>
    </div>
</body>
</html>