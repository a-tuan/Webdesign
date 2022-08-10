<?php
session_start();

 ?>
<!DOCTYPE html>
 <html>
     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
        <link rel="stylesheet" type="text/css" href="./Sneaker-shop.css">
        <link rel="stylesheet" type="text/css" href="./Styles.css">
         <!-- Font Awesome -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
        
     </head>
     <body >
     <?php require_once ("header.php"); ?> 
     <main style="background-image: url('./images/5081ef8572dff29f2a90c21e46d5e06d.jpg') ;   background-size:cover;
    background-position: center;">
     
        <h1 style="text-align: center; margin-top: 150px; font-size: 550%;  color: #FF9900;">Your infomation</h1>
        <div class="col-md-12" style=" color: #FF9900; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                                        max-width: 700px;
                                        margin: 50px auto;
                                        padding:20px; font-size:200%">
            
            <form style=" margin-left: 2%; margin-right: 2%;">

                <?php
                    $conn = new mysqli('localhost','root','', 'customer');
                    $sql="SELECT * FROM usertable where name = '$_SESSION[user]'";
                    $result = $conn->query($sql);
                    while ($row=$result->fetch_assoc()) {
                        echo
                        "<tr><br>
                            <td>User:</td><td>  ".   $row['name']."</td><br><br>
                            <td>Phone : ".  $row['phone_number']."</td><br><br>
                            <td>Gmail: ".  $row['email']."</td><br><br>
                        </tr>";
                    }
                ?>
            </form>
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