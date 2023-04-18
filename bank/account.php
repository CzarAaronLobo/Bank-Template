<!DOCTYPE html>
<html lang="en">

<head>
    <title>Loan</title>
    <link rel="stylesheet" href="./css/account.css" />
    <link rel="stylesheet" href="./css/utils.css" />
</head>

<body style="background:#96D678;background-size: 100%">
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
    <form class="form-inline my-2 my-lg-0">
    </form>
    </div>
    </nav><br><br><br>
    <div class="container">
        <div class="card  w-75 mx-auto">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <h2 class="card-title text-center">Loan Request </h2>
                            <div class="card-body py-md-4">
                                <form _lpchecked="1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="password" placeholder="Branch Id">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="confirm-password" placeholder="Account Type">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Amount" placeholder="Loan Amount">
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <button class="btn btn-primary">Request Loan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>