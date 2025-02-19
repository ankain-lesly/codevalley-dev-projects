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
    <title>Product Description - Frupreneur</title>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
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

    <?php
 if(isset($_POST['order'])){
    // $product_image= $_POST['product_image'];
    $product_name= $_POST['product_name'];
    $product_price= $_POST['product_price'];
    $product_size= $_POST['product_size'];
    $product_qty= $_POST['product_qty'];
    

    // Checking already existing user 
    // $checkEmail="SELECT * from users where email='$email'";
    // $result=$conn->query($checkEmail);
    // if($result->num_rows>0){
    //     echo "A User With This email Already Exist";
    // }
    // else{
    if(!$product_qty || !$product_size){ ?>
    <p style="color:red"><?php  echo " * You must set a product quantity and Size";?> </p>
    <?php
    }else{
        $insertQuery ="INSERT INTO orders(product_name, product_price, product_size, product_qty)
                       VALUES ('$product_name','$product_price','$product_size','$product_qty')";
    // query method od database connection 
                    $result=mysqli_query($conn,$insertQuery);
                    if($result){
                    echo "Order Received Succesfully";}
                    else{
                        echo "Order Failed";
                       }
                       if($result){
                           header('Location:cart.php');       
                       }else{ die ('Eror');}
    }
   
} 
?>
    <section id="prodetails" class="section-p1">


        <form action="" method="post" style="display:flex;">
        <div class="single-pro-image">
            <img src="images/products/file-SYW9aHDn1vZrnhghb14onm.webp" alt="product1" width="100%" id="MainImg" name="product_image">
            <input type="text" name="product_name" value="" placeholder="Enter Your Products Name">
            <input type="number" name="product_price" value="$1000.00" placeholder="Enter Your Product's Price">
        </div>
        <div class="single-pro-details">
            <h5>Energy Utilities</h5>
            <h4 name="product_name">Solar Home System</h4>
            <h2 name="product_price">$1000.00</h2>
            <select name="product_size">
                <option>Select Size</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="" name="product_qty">
            <button class="normal add-to-cart" name="order">Add To Cart</button><br> <br>
            <span><span style="font-weight:bolder">Problem:</span> Frequent power outages and lack of electricity in rural areas. <br> <br>
            <span style="font-weight:bolder">Solution:</span> Solar home systems provide reliable, renewable energy 
             for lighting,charging devices, and powering small appliances. 
             Frupreneur provides a space where users canpurchase imported goods 
             at veryaffordable prices because we are out to hekp the population of Cameroon 
              in reducing some of the everyday challenges being faced </span>
        </div>
        </form>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Energy and Utilities Collection; Must Have, For All Homes</p>
        <div class="pro-container">
            <div class="pro">
                <img src="images/products/received_614728541216341.jpeg" alt="product1">
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
                    <h4>$price</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart" ></i></a>
            </div>
            <div class="pro">
                <img src="images/products/received_1096638751955081.jpeg" alt="product1">
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
                    <h4>$price</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart" ></i></a>
            </div>
            <div class="pro">
                <img src="images/products/received_1100740294929122.jpeg" alt="product1">
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
                    <h4>$price</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart" ></i></a>
            </div>
            <div class="pro">
                <img src="images/products/received_1101292367978707.jpeg" alt="product1">
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
                    <h4>$price</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart" ></i></a>
            </div>
        
            
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
            <a href="">Delivery Information</a>
            <a href="#">Privacy Policy</a>
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