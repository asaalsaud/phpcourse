<form action="array.php" method= "GET">
    <input type = "text" name = "name">
    <input type = "submit">
</form>

<?php
$name = $_GET["name"];

// $family = array("Father","Mother","brother");

// $family [1] = "mom";
// $family [3] = "sister";
// echo $family[3];
// echo count($family);

//Associative Array
$score = [
    "Nour" => ["Score" => "90", "Grade"=>"A"],
    "Majed"=> ["Score" => "80", "Grade"=>"B"],
    "Anas" => ["Score" => "40", "Grade"=>"F"],
];

echo "Score: " . $score[$name]["Score"];
echo "<br>";
echo "Grade: " . $score[$name]["Grade"];
?>
