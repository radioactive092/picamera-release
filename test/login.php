<?php include('login_action.php'); ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="avatar.png" class="avatar">
            <h1>Login</h1>
            <form action="" method="POST">
                <p>Username</p>
                <input type="text" name="username" placeholder="Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="login">
            </form>
        </div>
    </body>
</html>
