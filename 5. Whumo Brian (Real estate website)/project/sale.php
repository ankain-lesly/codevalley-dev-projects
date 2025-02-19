<?php
include "assets/config.php";
session_start();
if (!isset($_SESSION['user_id'])) {
  header("location: signin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sale.css">
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
                <li><a href="index.php">Home</a></li>
       
                <li><a href="">Sell</a></li>

                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            
            
        </nav>
    </header>
    <?php $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_id = {$_SESSION['user_id']}");
  if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
  }
  ?>
    <div class="section">
        <div class="form">
            <form action="#">
                
                <h3 class="head">Product Form</h3>
    
                <select name="" id="select" style="cursor: pointer;">
                    <option value="Sale" >Sale</option>
                    <option value="Rent" >Rent</option>
                    <input type="text" id="iu" name="op1"style="display: none;" >
                </select>
                <select name="" id="select2" style="cursor: pointer;">
                    <option value="Appartment" >Appartment</option>
                    <option value="House" >House</option>
                    <input type="text" id="iu2" name="op2"style="display: none;" >
                </select>
                <div class="input">
                    
                    <input type="number"  required name="price">
                    <label for="">Enter Amount</label>
                </div>
                <div class="input">
                    
                    <input type="text" placeholder="" required name="auth">
                    <label for="">Name</label>
                </div>
                <div class="input">
                    
                    <textarea  required name="address"></textarea>
                    <label for="">Address</label>
                </div>
                <div class="input">
                    
                    <input type="number" placeholder="" required name="numA">
                    <label for="">Number of Appartment</label>
                </div>
                <div class="input">
                    
                    <input type="number" placeholder="" required name="bed">
                    <label for="">Number of Bedrooms</label>
                </div>
                <div class="input">
                    
                    <input type="number" placeholder="" required name="hgt">
                    <label for="">Total Height</label>
                </div>
                <input type="text" value="<?php echo $row['user_id'] ?>" name="id" hidden>
                <div class="input " style="border: none; display: flex; flex-direction: column; align-items: start;">
                    <p for="file">Select Image</p>
                    <input class="imgf" id="file" type="file"  required name="image">
                </div>
                <div class="error-txt"></div>
                <button class="Submitbtn" class="btn" name="btn">Submit Information</button>
            </form>
            
            
        </div>
    </div>
    <script src="assets/submit.js"></script>
    <script defer src="https://app.fastbots.ai/embed.js" data-bot-id="cm6ps6u1m04ansvk45xvjrg88"></script>
    <script>
        const select = document.querySelector("#select");
        const input = document.querySelector("#iu");
        const select2 = document.querySelector("#select2");
        const input2 = document.querySelector("#iu2");

        input.value = select.innerText;
        input2.value = select2.innerText;


    </script>
    
</body>
</html>