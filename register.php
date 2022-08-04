<?php include('server.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> User Registration Using PHP and MySQL </title>
    <link rel="stylesheet" type="text/css" href="style.css">


<script type="text/javascript">
    

    function show(){
        var click = document.getElementById('show_password');
        var password = document.getElementById('password');
        if (click == on) {
            password.type="text";
            return false;
        }

        else{
            password.type = "password";
            return false;
        }
    }
</script>
</head>




<body>
<div class="header">
    <h2>Register</h2>
</div>
<!-- display validation error here -->
    

    <form method="post" action="register.php">
    
<?php include('errors.php'); ?>

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>


    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1" id="password" >
        
    </div>

    <input type="checkbox"  name="show_password" id="show_password" value=" +{value1: data.blue, value2: data.blue} + "   onemptied="document.getElementById('password').type='password'" onclick=" document.getElementById('password').type='text' "  onblur="document.getElementById('password').type='password'" ondblclick="document.getElementById('password').type='password' ">

    <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_2">
    </div>

    
   

    <div class="input-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
    </div>

    <div class="input-group">
    <button name="register" type="Submit" class="btn">Register</button>
        </div>

<p> Already a member? 
    <a href="login.php">Sign In </a>
</p>

    </form>
</body>
</html>