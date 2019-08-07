
<!DOCTYPE html>
<html>
<body>


<?
$income = array(
    array("Ali", "75k"), //two dimensional array
    array("Hamza", "56k"),
    array("Ahmad", "54k"),

);

foreach ($income as $x => $x_value) {
    echo "index is" . $x . "<br>";
    echo "<ul>";
    foreach ($x_value as $array_values) {
        echo "<li>" . $array_values . "</li>" . "<br>";
    }
    echo "</ul>";
}
echo "<br>";
echo $income[0][1] . "<br>";
echo "<br>";
$students = array(
    array("ali", "01", "fa15"), //two dimensional array
    array("hamza", "02", "fa16"),
    array("kamran", "03", "fa17"),
);

$marks = array(
    "Ali" => array(
        "physics" => "100", //two dimensional associative array
        "Chemistry" => "68",
        "Islamiat" => "88",

    ),
    "Hamza" => array(
        "physics" => "108",
        "Chemistry" => "22",
        "Islamiat" => "86",

    ),
    "Kamran" => array(
        "physics" => "106",
        "Chemistry" => "99",
        "Islamiat" => "62",

    ),
);

foreach ($marks as $stdnames => $stdsubjects) {
    echo $stdnames . "<br>";
    foreach ($stdsubjects as $subject => $sbmarks) {
        echo $subject . '->' . $sbmarks . "<br>";

    }
}
;
echo "<br>";
echo $marks["Ali"]["Islamiat"] . "<br>";

echo "<br>";

$results = array( //Three dimensional array
    "ali" => array(
        "islamiat" => array(
            "1st term" => "77",
            "2nd term" => "88",
            "3rd term" => "99",
        ),
        "physics" => array(
            "1st term" => "77",
            "2nd term" => "88",
            "3rd term" => "99",
        ),
        "Maths" => array(
            "1st term" => "77",
            "2nd term" => "88",
            "3rd term" => "99",
        ),
    ),
    "Hamza" => array(
        "islamiat" => array(
            "1st term" => "77",
            "2nd term" => "88",
            "3rd term" => "99",
        ),
        "physics" => array(
            "1st term" => "77",
            "2nd term" => "88",
            "3rd term" => "99",
        ),
        "Maths" => array(
            "1st term" => "77",
            "2nd term" => "88",
            "3rd term" => "99",
        ),
    ),
);

echo "<br>";
echo $results["ali"]["islamiat"]["3rd term"];
echo "<br>";

foreach ($results as $names => $subjects) {
    echo $names . "<br>";
    foreach ($subjects as $subject => $sbmarks) {
        echo $subject . "<br>";
        foreach ($sbmarks as $exam => $marks) {
            echo $exam . "=>" . $marks . "<br>";
        }
    }
}
?>
</body>
</html>