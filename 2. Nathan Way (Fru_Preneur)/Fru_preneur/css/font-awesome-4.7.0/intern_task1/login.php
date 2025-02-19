<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Importation Company</title>
    <link rel="stylesheet" href="web.css">
</head>
<style>
    *{
   box-sizing: border-box;
  }
 body {
   font-family: Arial, sans-serif;
   background-color: #f4f4f4;
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
   margin: 0;
}

.login-container {
   background: #ffffff;
   padding: 30px;
   border-radius: 20px;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   width: 300px;
}

h2 {
   margin-bottom: 20px;
   color: #333333;
   text-align: center;
   
}

.input-group {
   margin-bottom: 15px;
   font-weight: bold;
}

.input-group label {
   display: block;
   font-size: 14px;
   margin-bottom: 5px;
   color: #333333;
}

.input-group input {
   width: 100%;
   padding: 10px;
   font-size: 14px;
   border: 1px solid #cccccc;
   border-radius: 4px;
}

.button {
   width: 100%;
   padding: 10px;
   background-color:gold;
   border: none;
   border-radius: 14px;
   color: white;
   font-size: 16px;
   cursor: pointer;
   margin-top: 10px;
}
.button:hover{
   background-color:  rgb(197, 169, 7);
}
.register-link {
   text-align: center;
   margin-top: 20px;
}

.register-link a {
   /* color: rgb(71, 69, 69); */
   text-decoration: none;
}

.register-link a:hover {
   text-decoration: underline;
}
label{
   font-weight: bold;
}


@media screen and (max-width: 850px){
body{
      font-size: small;
      align-items: center;
     
   }
    
    .login-container{
        width: 75%;
        margin-top: 2rem;
        margin-bottom: 1rem;
        padding: 20px;
    }
    .input-group input{
        height: 2rem;
       padding: 5px;
       border-radius: 7px;
    }
    h2{
        font-size: large;
    }
}
</style>
<body>
    <div class="login-container">
        <h2>Login To Your Account</h2>
        <form action="/login" method="post">
            <div class="input-group">
                <label for="email">Email or phone number</label>
                <input type="text,number" id="email" name="email" required="true">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required="true">
                
            </div>
                   <label for="">
                    <input type="checkbox" name="stayin" value="yes"> Keep me signed in
                    </label>
                         <a href="home.php"> <input type="button" value="Login" class="button"></a>
 
            <div class="register-link">
            <p style="font-size:15px;">By continuing, you agree to furniture Hub's <br /> <a href="#">refund policy</a> and <a href="#">Privacy notice</a></p>
            <div class="endbox">
            Don't have an account? <a href="registration.html"> Register</a>
            </div>
        </form>
    </div>

   </body>
</html>
           <!-- <script>
        document.getElementById("myButton").addEventListener("click", function() {
            // alert("Button was clicked!"); 
            window.location.href = "registration.php";
        }); -->

