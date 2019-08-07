<?
$username="root";
$servername="localhost";
$password="";
$db="practice";

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("connection cannot be established".mysqli_connect_error());
}
echo"database connected sucessfully <br>";
//$sql=" UPDATE users SET Name='Hassaan',Email='hassaan@gmail.com' WHERE ID='1'" to update single row
$sql=" UPDATE users SET Name='Kazim Shah',Email='Kazim.shah@gmail.com' WHERE ID in (7,8) "; //to update multiple rows

if(mysqli_query($conn,$sql)){
    echo"Table is Updated <br>";
}else{
    echo"table is not updated <br>";
}
mysqli_close($conn);
?>
