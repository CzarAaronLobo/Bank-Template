<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/login.css" />
</head>

<body>
    <?php
    require "check.php";
    if (isset($failed)) {
        echo "<div> INVALID USER AND PASSWORD</div>";
    }
    ?>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
        <div class="txt_field">
            <input type="text" name="user" placeholder="USERNAME" required />
        </div>
        <div class="txt_field">
            <input type="password" name="password" placeholder="PASSWORD" required />
        </div>
            <input type="submit" value="Login" />
        </form>
      
    </div>

</body>

</html>