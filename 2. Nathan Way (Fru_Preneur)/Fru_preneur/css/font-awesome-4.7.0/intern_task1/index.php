<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>
    <style>
     #logo{
        height:100px;
        width:100px;
        border-radius:50px;
        margin-left:20px;
        margin-top:10px;
     }
     body{
      background-color: #f4f4f4;
     }
     center{
        /* padding-bottom:50px; */
        margin-top:150px;
     }
     input{
      cursor: pointer;
        background-color: black;
  color: white;
  font-weight: bold;
  width: auto;
  padding: 14px;
  border-radius: 13px;
  font-size: large;
     }
     p{
        margin:35px;
     }
     .footer {
    /* height: 100px; Set the height of the footer */
    /* background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 100%); */
    color: black; /* Text color */
    display: flex;
    justify-content: center; /* Center text horizontally */
    align-items: center; /* Center text vertically */
    position: relative; /* Positioning context for pseudo-elements */
    background: linear-gradient(to bottom,rgba(0,0,0,.14),rgba(0,0,0,.03) 3px,transparent);
zoom: 1;
height: 44px;
  margin-bottom: -18px;

}
.container{
 
   width: 50%;
   margin: auto;
   align-items: center;
   justify-content: center;
   text-align: center;
}
@media screen and (max-width: 850px){
   input{
      font-size: smaller;
      padding: 8px;
      width: auto;

   }
   #logo{
      width: 80px;
      height: auto;

   }
   h1{
      font-size: larger;
   }
   .container{
      width: 75%;
      height: auto;
   }
   body{
      width: 100%;
   }
}
    </style>
</head>
<body>
   <a href="home.php"> <img src="assets/images/logo4.jpg" alt="logo"  id="logo"></a>
    <div class="container">
       <center> <h1>Sign in to Furniture<span style="color:gold">Hub</h1>
      <a href="login.php"><input type="button" value="Log in with your account"></a> <br>
         <p> No account? <a href="registration.php"> Create one </a></p></center>
    </div>
    <!-- <footer>
        <a href="#">Conditions of use</a>
        <a href="#">Privacy notice</a>
        <a href="#">Help</a>
    </footer> -->
</body>
</html>