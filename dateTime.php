<!DOCTYPE html>
<html>
<body>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
echo date("m-Y-d") . "<br>";
echo date("d-m-Y") . "<br>"; //to make date in any format
echo "The time is " . date("H:i:sa") . "<br>";
date_default_timezone_set("America/New_York"); //sets the timezone to "America/New_York", then outputs the current time in the specified format
echo "The time is " . date("h:i:sa") . "<br>";
$d = mktime(11, 14, 54, 8, 12, 2014); // creates a date and time from a number of parameters in the mktime() function
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
$d = strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>"; //creates a date and time from the strtotime() function

$d = strtotime("tomorrow"); //PHP is quite clever about converting a string to a date, so you can put in various values
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate = strtotime("Saturday"); //The example below outputs the dates for the next six Saturdays
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}

$d1 = strtotime("July 04"); //
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
echo "There are " . $d2 . " days until 4th of July.";
echo "<br>";
echo "practice start from here";
echo "<br>";
echo date("Y-m-d");
echo "<br>";
echo "the time is" . date("h:i:sa");
echo "<br>";
echo "the time is" . date("H:i:sa");
echo "<br>";
date_default_timezone_set("America/New_York");
echo "time in America is" . date("h:i:sa");
echo "<br>";
$d = mktime(11, 33, 46, 12, 24, 2018);
echo "the make up time is" . date("h:i:sa m/d/Y", $d);
echo "<br>";
$m = strtotime("2:35 pm 15 november 2019");
echo "the strtotime is" . date("h:i:s m/d/Y", $m);
echo "<br>";
$n = strtotime("next Monday");
echo date("h:i:s m/d/Y", $n);
echo "<br>";
$p = strtotime("27 September");
$q = ceil(($p - time()) / 60 / 60 / 24);
echo "there are $q days left until my birthday";
?>
&copy; 2010-<?php echo date("Y") . "<br>"; ?> //to print copy right from 2010-any year
&copy;2015-<?php echo date("Y") . "<br>"; ?>


</body>
</html>