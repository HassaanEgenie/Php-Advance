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
//$sql="DELETE from users where ID='5'"to delete a single row;
$sql="DELETE from users where ID in (3,4) ";//to deleat multiple rows

if(mysqli_query($conn,$sql)){
    echo"row is deleated <br>";
}else{
    echo"row canot be deleated <br>";
}
mysqli_close($conn);
?>
