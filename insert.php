<?php

$name = $_POST['stdName'];
$roll = $_POST['stdRoll'];
$number = $_POST['stdNumber'];

echo "Name is : " .$name. "</br>";
echo "Roll is : " .$roll. "</br>";
echo "Number is : " .$number. "</br>";


$conn = new mysqli("localhost","root","","taha");

$q = "insert into taha(`std_name`, `std_roll`, `std_number`) VALUES ('".$name."', '".$roll."', ".$number.")";

$conn->query($q);
?>

