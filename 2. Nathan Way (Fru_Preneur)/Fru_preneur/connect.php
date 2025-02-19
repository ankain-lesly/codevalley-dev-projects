<!-- handling web page and database connection  -->
<?php
$host="localhost";
$user="root";
$pass="";
$db="frupreneur";
$conn=mysqli_connect($host,$user,$pass,$db) ;
// error message if connnection is not succeded 
if(!$conn){
    die("Failed To Connect DB". mysqli_connect_error());
}
// else{
//     echo "connected";
// }

?>