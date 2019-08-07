<?
$servername="localhost";
$username="root";
$password="";
$db="practice";

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("Unable to establish connection");
}
echo"Connection is established <br>";

//$sql="SELECT * from users ORDER BY ID DESC";

$sql="SELECT * FROM users ORDER BY NAME DESC,Email ASC";

if(mysqli_query($conn,$sql)){
    echo "colum is now oredered in specific order <br>";
}
else{
    echo"Colums are unable to be ordered <br>";
}
?>
