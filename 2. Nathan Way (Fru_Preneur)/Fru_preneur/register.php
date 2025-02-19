<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frupreneur-Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <style>
        .logo1{
            height: 80px;
            width: 150px;
            margin-top: -7em;
            /* padding-bottom: 10px; */
       }
        input[type="password"],
        input[type="text"] {
            width: 100%;
        }
        .eye-icon {
    position: absolute;
    right: 10px;
    top: 10px;
    cursor: pointer;
    font-size: 20px;
}
    </style>
</head>
<body>
    <form action="script.php" method="post">
        <div class="container">
            <div class="signin_container" style="padding-bottom: 1em; padding-top: 0.em;">
            <div class="logo">
                <center><img src="assets/images/logo1.png" alt="" class="logo1"></center>
                </div>
            <!-- <div class="signin_title">
                <span>Register</span>
            </div> -->

            <div class="input_wrapper">
               <input type="text" id="user" class="input_field" name="user" placeholder="User Name" required >
               <!-- <label for="user" class="label">Username</label> -->
               <i class="fa-regular fa-user icon"></i>
            </div>
            <div class="input_wrapper">
               <input type="email" id="email" class="input_field"  name="email" placeholder="email" required>
               <!-- <label for="user" class="label">Email </label> -->
               <i class="fa-regular fa-envelope icon"></i>
            </div>

            <div class="input_wrapper">
               <input type="password" id="pass" class="input_field" name="password" placeholder="Password" required >
               <!-- <label for="pass" class="label" placeholder="At least 6 characters">Password</label> -->
               <i class="fa-solid fa-key icon"></i>
               <span style="display: block; font-size: small; font-style: italic; text-decoration: none; font-color:red;">At least 8 characters</span>
            </div>

            <div class="input_wrapper">
               <input type="password" id="cfrm_pass" class="input_field" name="cfrm_pass" placeholder="Re-enter Password" required>
               <!-- <label for="pass" class="label" placeholder="At least 6 characters">Re-enter Password</label> -->
               <i class="fa-solid fa-key icon"></i>
            </div>
              
             <div class="input_wrapper">
                 <input type="submit" class="input-submit" value="SignUp" name="SignUp">
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
                <span style="font-weight: bold; font-family: montserrat;">Already have an account <a href="login.php" style="color: blue; ">Login</a></span><br><br>
             </div>
             <span style="font-size: small; color: rgb(5, 5, 5);">  By continuing, you agree to Frupreneur's <a href="#" style="color: blue;">Conditions of Use</a> and <a href="#" style="color: blue;">Privacy Notice.</a>       </span>        </div>

        </div>
    </div>
    </form>
</body>
</html>