<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Systemt</title>
</head>
<body>
    <section>
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>Sign Up</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/signup.php" method="post"></form>
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="Email">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/login.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd">
                    <br>    
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>