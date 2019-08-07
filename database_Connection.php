<?
$username="root";
$servername="localhost";
$password="";
$db="practice";
$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("connection error".mysqli_connect_error());
}
echo"connected sucessfully";
mysqli_close($conn);
?>
