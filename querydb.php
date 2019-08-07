<?
$servername="localhost";
$username="root";
$password="";
$db="practice";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("connection canot be established".mysqli_connect_error());
}
echo"connection is established <br>";
//$sql=" UPDATE users SET Name='Hassaan',Email='hassaan@gmail.com' WHERE ID='1'" to update single row
//$sql=" UPDATE users SET Name='Kazim Shah',Email='Kazim.shah@gmail.com' WHERE ID in (7,8) "; //to update multiple rows
//$sql="INSERT INTO USERS (NAME,Email) VALUES('HASSAAN','hassaanishere@gmail.com'), ('Ali','ali@gmail.com'), ('Hamza','hamza@gmail.com')";
$sql="DELETE from users where ID in (3,4) ";//to deleat multiple rows
//$sql="DELETE from users where ID='5'"to delete a single row;

if(mysqli_query($conn,$sql)){
    echo"row is deleated <br>";
}else{
    echo"row canot be deleated <br>";
}
mysqli_close();
?>
