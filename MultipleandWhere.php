<?
$servername="localhost";
$username="root";
$password="";
$db="practice";

$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("cannot connect to database <br>");
}
echo("connection with database is established <br>");

$sql="INSERT into users (NAME,Email) Values ('Kabir','kabir.singh@yahoo.com'),('Saleem','saleem@hotmail.com'),('Zaheer','zaheer@gmail.com') ";

if(mysqli_query($conn,$sql)){
    echo"records are inserted <br>";
}else{
    echo"records are not  inserted <br>";
}

$qry="UPDATE  users SET NAME='Azeem',Email='Azeem@gmail.com' where ID='5'";

if(mysqli_query($conn,$qry)){
    echo"record is added <br>";
}else{
    echo "record is not added <br>";
}
?>
