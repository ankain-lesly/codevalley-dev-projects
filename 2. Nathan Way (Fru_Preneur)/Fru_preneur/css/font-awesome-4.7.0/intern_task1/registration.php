<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Furniture Hub</title>
       <link rel="stylesheet" href="web.css">
</head>
<body>
<div id="logo">
   
</div>
<div class="container">
   
    <form action="/register" method="post">
        <h2 id="reg" >Create Your Account</h2>
        <div class="form-group">
            <label for="Name">Your Name</label>
            <input type="text" id="firstName" placeholder="First and Last name" name="Name" required="true">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <div class="a-box a-alert-inline a-alert-inline-info auth-inlined-information-message a-spacing-top-mini" aria-live="polite" aria-atomic="true">
                <div class="a-box-inner a-alert-container">
                    <i class="a-alert a-icon-alert"></i>
                    <div class="a-alert-content">
                          passwords must be at least 6 characters.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
        </div>
        <div class="form-group">
              <a href="login.html"><input type="button" value="Create your account" class="button"></a>
        </div>
  
    </form>
    <div class="login-link">
        <p style="font-size:15px;">By creating an account, you agree to furniture Hub's <br /> <a href="#">refund policy</a> and <a href="#">Privacy notice</a></p>
        <div class="endbox">
            Already have an account? <a href="login.html" style="" >Login here</a>.
        </div>
    </div>
</div>
</body>
</html>
      <!-- <script>
        document.getElementById("myButton").addEventListener("click", function() {
            // alert("Button was clicked!"); 
            window.location.href = "login.php";
        });
    </script> -->