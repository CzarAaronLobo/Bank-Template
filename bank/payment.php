<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment</title>
    <link rel="stylesheet" href="./css/payment.css" />
    <link rel="stylesheet" href="./css/utils.css" />
</head>

<body>
    <header class="container1">
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
                
                
                <form method="post">
                    <input class="logout" type="hidden" name="logout" value="1" />
                    <input class="logout" type="submit" value="Logout" />
                </form>
            </div>
        </nav>
    </header>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="/action_page.php">

                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Enter First Name">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="abc@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="New York">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                           
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="">

                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <p>Total <input type="text" id="cname" name="cardname" placeholder=""> <span class="price" style="color:black"></span></p>
                    <input type="submit" value="Transfer" class="btn">
                </form>
            </div>
        </div>

        <div class="col-25">
            
                
               
                <hr>
                
            
        </div>
    </div>
</body>

</html>