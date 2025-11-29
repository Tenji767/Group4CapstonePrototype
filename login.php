<?php
include('server.php')
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <h1>Testing</h1>
        
<form method="post" action="login.php">
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" />
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" />
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>Not yet a member? <a href="register.php" class="navigate">Become One</a></p>
</form>
    </body>
</html>