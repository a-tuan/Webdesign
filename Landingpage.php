<?php

session_start();

require_once ('CreateDb.php');
require_once ('component.php');

// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'Landingpage.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Sneaker shop</title>
    <link rel="stylesheet" type="text/css" href="./Sneaker-shop.css">
    <link rel="stylesheet" type="text/css" href="./Styles.css">
    
    
    <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php require_once ("header.php"); ?>  

    <main>

        <div class="images-header">
            <img src="images/2.png" alt="images-header">
        </div>

         <!-- <div id="sneakers">

            <div class="Shoes">
                <img src="images/nike-dunk-low-white-black-2021-DD1503-101.jpg" alt="">
                <h1>Nike Dunk Low White Black(2021)</h1>
                <p>$218</p>
                <button type="submit" name="add" >
                    ADD TO CART
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/air-jordan-1-retro-high-og-patent-bred.jpg" alt="">
                <h1>Air Jordan 1 Retro High OG Patent Bred</h1>
                <p>$237</p>
                <button type="submit" name="add">
                    ADD TO CART
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/Jordan 1 Low Starfish copy.jpg" alt="">
                <h1>Jordan 1 Low Starfish</h1>
                <p>$200</p>
                <button type="submit" name="add">
                    ADD TO CART
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/adidas Yeezy Boost 350 V2 copy.png" alt="">
                <h1>adidas Yeezy Boost 350 V2 Light</h1>
                <p>$269</p>
                <button type="submit" name="add">
                    ADD TO CART
                </button type="submit" name="add">
            </div>
         
            <div class="Shoes">
                <img src="images/Jordan 4 Retro Lightning.jpeg" alt="">
                <h1>Jordan 4 Retro Lightning</h1>
                <p>$282</p>
                <button type="submit" name="add">
                    ADD TO CART
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/Nike Dunk Low Green Glow.jpg" alt="">
                <h1>Nike Dunk Low Green Glow</h1>
                <p>$228</p>
                <button type="submit" name="add">
                    ADD TO CART
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/Nike Dunk Low Grey Fog.jpg" alt="">
                <h1>Nike Dunk Low Grey Fog</h1>
                <p>$269</p>
                <button type="submit" name="add">
                    ADD TO CART
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/Jordan 5 Retro Moonlight.jpg" alt="">
                <h1>Jordan 5 Retro Moonlight</h1>
                <p>$215</p>
                <button type="submit" name="add">
                    ADD TO CART 
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/adidas Yeezy Boost 700.jfif" alt="">
                <h1>adidas Yeezy Boost 700</h1>
                <p>$215</p>
                <button type="submit" name="add">
                    ADD TO CART 
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/Jordan 11 Retro Cool Grey.png" alt="">
                <h1>Jordan 11 Retro Cool Grey</h1>
                <p>$219</p>
                <button type="submit" name="add">
                    ADD TO CART 
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/adidas yeezy foam rnnr ochre.jpg" alt="">
                <h1>adidas Yeezy Foam RNNR Ochre</h1>
                <p>$196</p>
                <button type="submit" name="add">
                    ADD TO CART 
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/Jordan 1 Retro High White University Blue Black.png" alt="">
                <h1>Jordan 1 Retro High White University Blue Black</h1>
                <p>$399</p>
                <button type="submit" name="add">
                    ADD TO CART 
                </button type="submit" name="add">
            </div>
            
            <div class="Shoes">
                <img src="images/Jordan 12 Retro Royalty Taxi.png" alt="">
                <h1>Jordan 12 Retro Royalty Taxi</h1>
                <p>$236</p>
                <button type="submit" name="add">
                    ADD TO CART 
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/Jordan 3 Retro Pine Green.png" alt="">
                <h1>Jordan 3 Retro Pine Green</h1>
                <p>$225</p>
                <button type="submit" name="add">
                    ADD TO CART 
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/adidas Yeezy Boost 350 V2 Mono Cinder.png" alt="">
                <h1>adidas Yeezy Boost 350 V2 Mono Cinder</h1>
                <p>$232</p>
                <button type="submit" name="add">
                    ADD TO CART 
                </button type="submit" name="add">
            </div>

            <div class="Shoes">
                <img src="images/adidas Yeezy 450 Dark Slate.png" alt="">
                <h1>adidas Yeezy 450 Dark Slate</h1>
                <p>$300</p>
                <button type="submit" name="add">
                    ADD TO CART 
                </button type="submit" name="add">
            </div>
            
        </div>  -->

        <div class="container">
            <div class="row text-center py-5">
                <?php
                    $result = $database->getData();
                    while ($row = mysqli_fetch_assoc($result)){
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                    }
                ?>
            </div>
        </div> 

</main>
   
    <footer>

         <h4>About Us</h4>
         <p>Come to our store, you will feel satisfied with the quality and service</p>

        <div class="contact">
            <div class="contact-text">
                <p>Address: 19 Hoa Son 2, Hai Chau District, Danang City.</p>
                <p>Phone: +84 7 234 7878 </p>
                <p>Email: StockX@gmai.lcom</p>
            </div>  

            <div class="contact-icon">
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-instagram"></ion-icon>
                <ion-icon name="logo-twitter"></ion-icon>
                <ion-icon name="logo-linkedin"></ion-icon>
            </div>
        </div>
        
    </footer>



        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>