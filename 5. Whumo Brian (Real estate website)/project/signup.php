<?php
include "assets/config.php";
session_start();
if (!isset($_SESSION['user_id'])) {
  header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <video src="watermarked_preview.mp4" autoplay loop muted style="height: 110%;"></video>
    <header style="height: 10px;">
        <nav>
            <div class="logo">
                <a href="#"><i class="fa-solid fa-house"></i> Awealthome</a>
            </div>
            <ul>
                
       
                
                <li><a href="#">FAQ</a></li>
            </ul>
            
            
        </nav>
    </header>
 <div class="login">
    <div class="form-box">
      <h2>Sing Up <i class="bx bx-user"></i></h2>
      <form action="#">
        <div class="input-box">
          <span class="bx bx-user"></span>
          <input type="username" required name="username" />
          <label>User name</label>
        </div>
        <div class="input-box">
          <span class="bx bx-envelope"></span>
          <input type="email" required name="email" />
          <label>Email</label>
        </div>
        <div class="input-box">
          <span id="toggleBtn"></span>
          <input type="password" required name="password" id="pswrd" />
          <label>Password</label>
        </div>
        <div class="image">
          <label for="file"><i class="bx bx-image"></i> Insert image</label>
          <input type="file" id="file" accept="image/*" required name="image" hidden />
        </div>
        <div class="remember-forgot">
          <label style="color: antiquewhite;"><input type="checkbox" required /> I agree to the
            <a href="#" style="color: rgb(157, 203, 255);">terms & conditions</a></label>
        </div>
        <button type="submit" class="btn" name="btn">Sign Up</button>
        <div class="login-register">
          <p style="color: antiquewhite;">
            Already have an account? <a href="signin.php" style="color: rgb(157, 203, 255);" login-link>Sign_In</a>
          </p>
        </div>
        <div class="error-txt"></div>
      </form>
    </div>
  </div>
  <script src="assets/signup.js"></script>
<script src="admin_click.js"></script>

<script>
  let pswrd = document.getElementById('pswrd');
  let toggleBtn = document.getElementById('toggleBtn');




  toggleBtn.onclick = function () {
    if (pswrd.type === 'password') {
      pswrd.setAttribute('type', 'text');
      toggleBtn.classList.add('hide');
    } else {
      pswrd.setAttribute('type', 'password');
      toggleBtn.classList.remove('hide');
    }
  }
</script>
</body>
</html>