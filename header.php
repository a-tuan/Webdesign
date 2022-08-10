<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Sneaker shop</title>
    <link rel="stylesheet" type="text/css" href="Sneaker-shop.css">
    <link rel="stylesheet" href="Styles,css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
</head>

<body>
<header id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="images-logo">
                <img src="images/1.png" alt="Stock X">
            </div>
        
            <ul>
                <li><a href="Landingpage.php" style="padding: 0 10px; color: black; font-weight:600;">Sneaker</a></li>
              
                <li><a href="login.php" style="padding: 0 10px; color: black; font-weight:600;">Login</a><li>
                <li><a href="Signup.php" style="padding: 0 10px; color: black; font-weight:600;">Sign up</a></li>
                <li><a href="profile.php" style="padding: 0 10px; color: black; font-weight:600;">Profile</a></li>

                <div class="mr-auto"></div>
                <div class="navbar-nav">
                    <a href="cart.php" class="nav-item nav-link active">
                        <h5 class="px-5 cart">
                            <i class="fas fa-shopping-cart"></i> Cart
                            <?php

                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                            }else{
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                            }
                            ?>
                        </h5>
                    </a>
                </div>
                </div>
            </ul>    
        </nav>

</body>

</html>