<!-- form handler for registreation form-->
 <?php
 include 'connect.php';

 if(isset($_POST['SignUp'])){
    $user_name=mysqli_real_escape_string($conn,trim($_POST['user']));
    $email=mysqli_real_escape_string($conn,trim($_POST['email']));
    $password=$_POST['password'];
    $confirmpassword=$_POST['cfrm_pass'];
    // hashiing password 
    $password=md5($password);
    $confirmpassword=md5($confirmpassword);

    // Checking already existing user 
    $checkEmail="SELECT * from users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "A User With This email Already Exist";
    }
    else{
        $insertQuery ="INSERT INTO users(user_name, email, password, confirm_password)
                       VALUES ('$user_name','$email','$password','$confirmpassword')";
    // query method od database connection 
                       if($conn->query($insertQuery)==TRUE){
                        header("location: login.php");
                       }
                       else{
                        echo"Error".$conn->error ;
                       }
    }
 }
 if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password); //pasword hashx

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){

        echo "YES";
        session_start();
        $row=$result->fetch_assoc();
        // if($_SESSION['email'] == $row['email']){
        if($email == $row['email']){

            header("Location: index.php");
        }
        
        exit();
    }
    else{
        echo "Account Not Found, Incorrrect Email or Password";
    }
 }
?>