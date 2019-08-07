<?
$username="root";
$password="";
$db="practice";
$servername="localhost";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("cannot establish connection".mysqli_connect_error());
}
echo "connection is established<br>";
$sql="INSERT INTO USERS (NAME,Email) VALUES('HASSAAN','hassaanishere@gmail.com'), ('Ali','ali@gmail.com'), ('Hamza','hamza@gmail.com')";



if(mysqli_query($conn,$sql)){
echo "New Record is inserted<br>";
}else{
 echo "record cannot be inserted<br>";
}

mysqli_close($conn);
?>
