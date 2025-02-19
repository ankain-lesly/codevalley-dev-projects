<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frupreneur -Your Trusted Online Whole-seller</title>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
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
  <!-- <link rel="stylesheet" type="text/css" href="css/track.css"> -->
</head>
<body>
    <section id="header">
        <a href="index.php"><img src="images/logo.png" class="logo" alt="Frupreneur" height="40rem" width="100rem" style="border-radius: 20px;"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php" class="active">Home</a></li>
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

    <section id="hero" class="hero-banner">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On All Our Products</h1>
        <p>Save more with coupons of up to 70% off</p>
        <button type="submit">Shop Now</button>
    </section>

    <section id="feature" class="section-p1"> 
        <div class="fe-box">
            <img src="images/features/slazzer-edit-image (1).png" alt="features" height="80px">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/Screenshot (152).png" alt="features" height="80px">
            <h6>Online Ordering</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/slazzer-edit-image (2).png" alt="features" height="80px">
            <h6>Timely Deliveries</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/slazzer-edit-image (5).png" alt="features" height="80px">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/slazzer-edit-image (8).png" alt="features" height="80px">
            <h6>Quick Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/scott-graham-5fNmWej4tAA-unsplash.jpg" alt="features" height="80px">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Energy and Utilities Collection; Must Have, For All Homes</p>
        <div class="pro-container">
                        <!-- php to display products frm database table 'products' -->
            <?php
                    $product_query= "SELECT * FROM products LIMIT 8" ;
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

            <div class="pro">
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
            <!-- <div class="pro">
              <a href="sproduct2.php"> <img src="images/products/received_623722086753342.jpeg" alt="product1"></a> 
                <div class="des">
                    <span class="brandname">lorem</span>
                    <h5>Low-Flw Water Fixtures</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$250.00</h4>
                </div>
                <a href="sproduct2.php"><i class="fal fa-shopping-cart cart" ></i></a>
            </div> -->
            <!-- <div class="pro">
               <a href="sproduct3.php"><img src="images/products/received_614728541216341.jpeg" alt="product1"></a> 
                <div class="des">
                    <span class="brandname">lorem</span>
                    <h5>Mini Solar grid</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$500.00</h4>
                </div>
                <a href="sproduct3.php"><i class="fal fa-shopping-cart cart" ></i></a>
            </div> -->
            <!-- <div class="pro">
               <a href="sproduct4.php"> <img src="images/products/received_1096638751955081.jpeg" alt="product1"></a>
                <div class="des">
                    <span class="brandname">lorem</span>
                    <h5>Rain Water-Harvesting Sytem</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$500.00</h4>
                </div>
                <a href="sproduct.php"><i class="fal fa-shopping-cart cart" ></i></a>
            </div> -->
            <!-- <div class="pro">
               <a href="sproduct5.php"><img src="images/products/received_1100740294929122.jpeg" alt="product1"></a>
                <div class="des">
                    <span class="brandname">lorem</span>
                    <h5>Water Purification System</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$250.00</h4>
                </div>
                <a href="sproduct5.php"><i class="fal fa-shopping-cart cart" ></i></a>
            </div> -->
            <!-- <div class="pro">
               <a href="sproduct6.php"><img src="images/products/received_1101292367978707.jpeg" alt="product1"></a> 
                <div class="des">
                    <span class="brandname">lorem</span>
                    <h5>Improved Cookstove</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$300.00</h4>
                </div>
                <a href="sproduct6.php"><i class="fal fa-shopping-cart cart" ></i></a>
            </div> -->
            <!-- <div class="pro">
              <a href="sproduct7.php"> <img src="images/products/received_1306308307384064.jpeg" alt="product1"></a> 
                <div class="des">
                    <span class="brandname">lorem</span>
                    <h5>Off-grid Solar Refrigerator</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$500.00</h4>
                </div>
                <a href="sproduct7.php"><i class="fal fa-shopping-cart cart" ></i></a>
            </div> -->
            <!-- <div class="pro">
               <a href="sproduct8.php"> <img src="images/products/received_581460167931167.jpeg" alt="product1"></a>
                <div class="des">
                    <span class="brandname">lorem</span>
                    <h5>Solar Powered Water water-pump</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$400.00</h4>
                </div>
                <a href="sproduct8.php"><i class="fal fa-shopping-cart cart" ></i></a>
            </div> -->
        </div>
    </section>
    
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2> Up to <span>50% Off</span> - All Gadgets & Utilities</h2>
        <button class="normal">Explore More</button>
    </section>
    
    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Health & Wellness Collection; Must Have, For All Homes</p>
        <div class="pro-container">
              <!-- php to display products frm database table 'products' -->
              <?php
                    $product_query= "SELECT * FROM products LIMIT 16 OFFSET 8" ;
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

            <div class="pro">
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy Deals</h4>
            <h2>buy 1 get 1 Free</h2> 
            <span>Only The best of every item is on sale at frupreneur</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box  banner-box2">
            <h4>Eco Friendly  </h4>
            <h2>Very Affordable Prices</h2>
            <span>Only The best of every item is on sale at frupreneur</span>
            <button class="white">Browse Collections</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Agriculture and Farming Collection -30% OFF</h3>
        </div>
        <div class="banner-box  banner-box2">
            <h2>TECH GADEGETS</h2>
            <h3>Education and Technology Collection</h3>
        </div>   
        <div class="banner-box  banner-box3">
            <h2>TRANSPORTATION</h2>
            <h3>Transportation and Logistics Collection</h3>
        </div> 
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
</body>
</html>