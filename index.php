<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
//Hello world basic
echo "Hello World!";
echo "<br>";

//Some functions of php
$greeting = " Hello, World! ";
var_dump($greeting);
echo "<br>";

$greeting = trim($greeting);
var_dump($greeting);
echo "<br>";

$words = explode(" ", $greeting);

// echo $greeting;
var_dump($words);
echo "<br>";

$underGreeting = str_replace(" ", "_", $greeting);
var_dump($underGreeting);
echo "<br>";

$lng = strlen($greeting);
var_dump($lng);
echo "<br>";

$underIndex = strpos($underGreeting, "_");
var_dump($underIndex);
echo "<br>";
?>

</body>
</html