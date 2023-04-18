<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
    <link rel="stylesheet" href="./css/blog.css" />
    <link rel="stylesheet" href="./css/utils.css" />
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

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Constantinople Bank</h2>
                <h5>A bank you trust and rely upon </h5>
                 <h6>   Established in 1985 </h6>
                <div class="fakeimg1"><img src="./images/blogH.webp" style="height: 400px; width: 1000px;"></div>
                <p>Services provided:
                <p> Health Insurance</p>
                <p> Loan</p>
                <p> Debit and Credit cards</p>
                <p> Instant transfer 24x7</p>
           
            </div>
            
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>The CEO's message</h2>
                <div class="img" style="height:100px;"><img src="./images/pic1.jpg" width="200" height="200"></div>
                <br></br>
                <br></br>
                <p>Living in the digital century without a reliable bank can be hard thing, Constantinople Bank can fill that void</p>
            </div>
            
            <div class="card">
                <h3>Visit your nearest branch today</h3>
                <p>Branches in: </p>
                <p>Tallinn </p>
                <p> Paris</p>
                <p>Berlin</p>
                <p> Mumbai</p>
                
            </div>
        </div>
    </div>

</body>

</html>