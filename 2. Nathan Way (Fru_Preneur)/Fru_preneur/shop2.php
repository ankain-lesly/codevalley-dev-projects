<?php
session_start();
include("connect.php")
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop - Frupreneur:Your Trusted Online Whole-seller</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
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
                <li><a href="shop.php" class="active">Shop</a></li>
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
                <li><a href="cart.php"><i class="fas fa-shopping-bag" id="bag"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <!-- responsive menu -->
        <div id="mobile"> 
            <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="hero-banner">
        <h2>#stayhome</h2>
        <p>Save more with coupons and up to 70% off</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">

                      <!-- php to display products frm database table 'products' -->
                      <?php
                    $product_query= "SELECT * FROM products LIMIT 20 OFFSET 16" ;
                    $select_all_products= mysqli_query($conn,$product_query);
                    while($row = mysqli_fetch_assoc($select_all_products)){
                            // to print category title as an array through converting it to a string format by assigning it to a string variable
                                        // exact match as table heads from database
                        $product_image = $row['product_image'];
                        $product_brand = $row['product_brand'];
                        $product_name = $row['product_name'];
                        $product_price = $row['product_price'];
                            // we use li because we want it to come out as a list item, we use double quotes due to the fact that we are using {}
                        ?>

                    <div class="pro" onclick="window.location.href='sproduct.html'"> 
                    <a href="sproduct.php"><img src="images/products/<?php echo $product_image ?>" alt="" width="100%"></a>
                <div class="des">
                    <span class="brandname"><?php echo $product_brand ?></span>
                    <h5><?php echo $product_name ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$<?php echo $product_price ?></h4>
                </div>
                <a href="sproduct.php"><i class="fal fa-shopping-cart cart" ></i></a>
            </div>
            <?php } ?>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="shop.php">1</a>
        <a href="shop2.php">2</a>
        <a href="shop3.php">3</a>
        <a href="shop4.php"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

    <section id="newsletter" class="section-m1">
        <div class="newstext section-p1">
            <h4>Sign Up for Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span style="color:gold;">special offers.</span></p>
        </div>
        <div class="form section-p1 ">
            <input type="text" placeholder="Your E-mail Address">
            <!-- <input type="button" value="Sign Up" class="normal"> -->
            <button class="normal">Sign Up</button>
        </div>
    </section>

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
            <a href="track-trace.html">Track My Order</a>
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

    <?php 
           if(isset($_SESSION['email'])){
            $email=$_SESSION['email'];
            $query=mysqli_query($conn, "SELECT users.* FROM 'users' WHERE users.email='$email'");
            while($row=mysqli_fetch_array($query)){
                echo $row['first_name'].''.$row['last_name'];
            }
           }
            ?>

<!-- hero animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    gsap.from(".section-p1", { duration: 5, opacity: 0, y: -90, ease: "power2.out" });
</script>
   <!-- <button>animation</button> -->
   <!-- <script>
    gsap.to(".jingle-element", { 
        rotation: 5, 
        repeat: -1, 
        yoyo: true, 
        duration: 0.2, 
        ease: "power1.inOut" 
    });
</script> -->
<script src="js/script.js"></script>
<script src="js/shop.js"></script>
</body>
</html>