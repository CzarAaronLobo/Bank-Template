<?php
session_start();
//LOGOUT
if (isset($_POST['logout'])) {
    unset($_SESSION['user']);
}

//back to login if not signed in
if (!isset($_SESSION['user'])) {
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }

        /* h1{color:green;background-color:orange;}
        h2{color:black;text-align: left;border-bottom:2px solid;margin-left: 350px;margin-right: 350px;} */
        /* .container{
                padding: 1em;
                margin: 1.5em;
        } */
    </style>
    <!-- <style>
    body{background-color:white;}
  </style> -->
    <title>Constantinople Bank</title>
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="./css/utils.css" />
    <!-- <h1>Contact us</h1>
    <p> Phone Number: +91-7338492458</p> -->
</head>

<body>
    <header class="container">
        <nav class="flex space-between">
            <div class="left flex items-center">
                <img src="images/logo.jpeg" />
                <ul class="flex items-center justify-center uppercase semibold">
                    <li><a href="index.php" style="text-decoration: none;">Home</a></li>
                    <li><a href="account.php" style="text-decoration: none;">Loan</a></li>
                    <li><a href="payment.php" style="text-decoration: none;">Payment</a></li>
                    <li><a href="blog.php" style="text-decoration: none;">Blog</a></li>
                    <li><a href="contact.php" style="text-decoration: none;">Contact Us</a></li>
                </ul>
            </div>

            <div class="right flex items-center">
                <div class="profile mx-2"></div>
                <div class="wishlist mx-2"></div>
                <div class="bag mx-2"></div>
                <form method="post">
                    <input class="logout" type="hidden" name="logout" value="1" />
                    <input class="logout" type="submit" value="Logout" />
                </form>
            </div>
        </nav>
    </header>

    <div>
        <p>What is your Financial Wellness?<br>
            It starts with knowing where you stand.</p>
        <img class="homeImg" src="./images/contact1.jpg">
        <img class="homeImg" src="./images/contact.jpg">
    </div>


    <footer>
        <div class="contact">
            <a href="https://www.facebook.com/aaronlobo1725/"><img src=./images/facebook.jpg alt="Facebook" height="100px" width="100px"></a>
            <a href="https://www.instagram.com/aaron._.lobo/"><img src="./images/Instagram.png" alt="Instagram" height="100px" width="100px"></a>
            <a href="https://www.reddit.com/user/TsarA17"><img src="./images/reddit.png" alt="Reddit" height="100px" width="100px"></a>
        </div>
    </footer>

</body>

</html>