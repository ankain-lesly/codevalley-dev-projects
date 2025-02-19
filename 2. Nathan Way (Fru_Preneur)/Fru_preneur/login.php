<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frupreneur-Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <style>
        .logo1{
            height: 80px;
            width: 150px;
            margin-top: -7em;
       }
    </style>
</head>
<body>
    <form action="script.php" method="post">
        
        <div class="container">
            <div class="login_container" style="padding-bottom: 1em; padding-top: 0.em;">
                <div class="logo">
            <center><img src="assets/images/logo1.png" alt="" class="logo1"></center>
            </div>
            <!-- <div class="login_title">
                <img src="assets/images/logo1" alt="logo">
            </div> -->

            <div class="input_wrapper">
            <input type="email" id="email" class="input_field"  name="email" placeholder="Email" required>
               <!-- <label for="user" class="label">Email </label> -->
               <i class="fa-regular fa-envelope icon"></i>
            </div>

            <div class="input_wrapper">
               <input type="password" id="pass" class="input_field" name="password" placeholder="Password" required>
               <!-- <label for="pass" class="label">Password</label> -->
               <i class="fa-solid fa-lock icon"></i>
            </div>

            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember Me</label>
                </div>

                <div class="forgot">
                    <a href="#">Forgot Password</a>
                </div>
            </div>
             <div class="input_wrapper">
                 <input type="submit" class="input-submit" value="Login" name="submit">
                 <div class="or"> 
                    ---------------or---------------
                </div><br>
                    <div class="icons">
                        <i class="fab fa-google"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-apple"></i>
                    </div>
             </div>
             <div class="signup">
                <span style="font-weight: bold; font-family: montserrat;">Don't have an account    <a href="register.php" style="color: blue; ">Sign Up</a></span><br><br>
             </div>
             <div class="signup">
             <span style="font-size: small; color: rgb(5, 5, 5);">  By continuing, you agree to Frupreneur's <a href="#" style="color: blue;">Conditions of Use</a> and <a href="#" style="color: blue;">Privacy Notice.</a>       </span>        </div>
        </div>
    </div>
    </form>
</body>
</html>