<?
session_start()
?>
<!DOCTYPE html>
<html>
<body>
<?
//session_destroy();//to destroy session variables
//session_unset();//to unset session varibles

$_SESSION["AdminName"] = "Hassaan";
$_SESSION["favColour"] = "Black";
$_SESSION["favFood"] = "Briyani";
echo "session variables are set";
print_r($_SESSION); //print all session variables
echo ($_SESSION["AdminName"]); //to print session variables;

?>
</html>
</body>
