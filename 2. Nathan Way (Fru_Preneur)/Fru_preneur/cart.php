<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART- Frupreneur:Your Trusted Online Wholesaler</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
   
   

    <!-- css styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive-style.css">
    <link href="css/style copy.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
</head>
<body>
    <section id="header">
        <a href="index.php"><img src="images/logo.png" class="logo" alt="Frupreneur" height="40rem" width="100rem" style="border-radius: 20px;"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php" >Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <!-- <li><a href="blog.php">Blog</a></li> -->
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="track-trace.html">Tracking</a></li>
                <!-- <li><a href="logout.php">Logout</a></li> -->
                 <div class="dropdown">
                    <img src="images/banner/user_prev_ui.png" alt="user-icon" class="user-icon" id="userIcon" height="25px" width="0.5px">
                    <div class="dropdown-content" id="dropdownContent">
                        <a href="login.php">Login</a>
                        <a href="register.php">Register</a>
                        <a href="logout.php">Logout</a>
                    </div>
                 </div>
                <li><a href="cart.php" class="active"><i class="fas fa-shopping-bag" id="bag"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <!-- responsive menu -->
        <div id="mobile"> 
            <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="contact-banner-cart">
        <h2>#Check out</h2>
        <p>View, Add, or Delete Products From Your Cart</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <th>Remove</th>
                    <!-- <th>Image</th> -->
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Size</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
            <?php

    $orders_query="SELECT * FROM orders";
    $select_orders=mysqli_query($conn,$orders_query);
    // finds rows matching query description and counts them
    $count=mysqli_num_rows($select_orders);
    if($count>0){
        while($row=mysqli_fetch_array($select_orders)){         
            $order_id=$row['order_id'];
            $product_name=$row['product_name'];
            $product_price=$row['product_price'];
            $product_size=$row['product_size'];
            $product_qty=$row['product_qty'];
            ?>
            <tr>
                <td><i class ="fas fa-times-circle"></i></td>
                <td><?php echo $product_name?></td>
                <td><?php echo $product_price?></td>
                <td><?php echo $product_qty ?></td>
                <td><?php echo $product_size?></td>
                <td><?php echo $product_price?></td>
            </tr>
            <?php
        }
    }
?>
                <!-- <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/products/file-SYW9aHDn1vZrnhghb14onm.webp" alt=""></td>
                    <td>Solar Home System</td>
                    <td>$1000.00</td>
                    <td><input type="number" name="" id="" value="1"></td>
                    <td>$1000.00</td>
                </tr>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/products/file-SYW9aHDn1vZrnhghb14onm.webp" alt=""></td>
                    <td>Solar Home System</td>
                    <td>$1000.00</td>
                    <td><input type="number" name="" id="" value="1"></td>
                    <td>$1000.00</td>
                </tr>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/products/file-SYW9aHDn1vZrnhghb14onm.webp" alt=""></td>
                    <td>Solar Home System</td>
                    <td>$1000.00</td>
                    <td><input type="number" name="" id="" value="1"></td>
                    <td>$1000.00</td>
                </tr> -->
            </tbody>
        </table>
    </section>
    <div id="paypal-button-container">
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=alphaint40@gmail.com&item_name=Item+Name&amount=10.00&currency_code=USD&return=http://localhost/intern_task1/Gallery.php/success&cancel_return=http://localhost/intern_task1/Gallery.php/cancel">
        <input type="button" value="Check Out" style="background-color:green;"></a>    
        </div>

    <footer class="section-p1">
        <div class="col">
             <a href="index.php"><img src="images/logo.png" class="logo" alt="Frupreneur" height="40rem" width="100rem" style="border-radius: 20px;"></a>
            <h4>Contact</h4>
            <p> <strong style="color:black">Address:</strong> L'achance Bridge, Bamenda, Cameroon</p>
            <p><b style="color:black">Phone:</b>+237 653 802 762 / +237 621 962 165</p>
            <p><b style="color:black">Email:</b>frupreneurcontact@gmail.com</p>
            <p><b style="color:black">Hours:</b>Available 24/7</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-x"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.php">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="contact.php">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="login.php">Sign In</a>
            <a href="cart.php">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="tracking.php">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google play Store</p>
            <div class="row">
                <a href="https://apps.apple.com/in/app/slazzer-background-remover/id6499511787"><img src="images/badges/appst.jpg" alt="" height="40px" width="110px"></a>
                <a href="https://play.google.com/store/search?q=slazzer&c=apps"><img src="images/badges/gogpl.jpg" alt="" height="40px" width="110px"></a>
            </div>
            <p>Secured Payment Gateways</p>
            <a href="#"><img src="images/badges/payment.jpg" alt="" height="60px" width="250px" class="badge"></a>
        </div> 
        <div class="copyright">
                <p>EST: 2025. All Rights Reserved - <span style="font-size:smaller">built by nathan way</span></p>
            </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    gsap.from(".section-p1", { duration: 5, opacity: 0, y: -90, ease: "power2.out" });
</script>
    <script src="js/script.js"></script>
    <div id="paypal-button-container"></div>

  

</body>
</html>