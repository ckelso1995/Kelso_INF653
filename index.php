<?php

$name = 'Christopher Kelso' ;
$age = '29';
$favorite_color = 'blue';

echo "My name is" .$name, "I am". $age. "years old and my favorite color is". $favorite_color;
    ?>

<?php
echo "He said, \"PHP is fun!\" and left.";
echo "First line" ."\n"."Second line";

?>

<?php
$greeting = 'Hello';
$age = '25';
echo "Welcome to the PHP world!";
echo "Your age is" . $age;
?>

<?php
echo "Welcome to PHP!"
$name = 'John';
echo 'Hello,'. $name;
?>

<?php
$price = 50; # price is 50 test comment
$discount = 10; /* discount is 10 test comment
*/
$finalPrice = $price - $discount; // final price is price minus discount
echo "Total price: $" . $finalPrice; # final price should be 40
?>

<?php
$num1 = 10;
$num2 = 5;
$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
$modulus = $num1 % $num2;
    
echo $addition. "\n";
echo $substraction. "\n";
echo $multiplication. "\n";
echo $division. "\n";
echo $modulus. "\n";
    ?>

<?php
$number
    if ($number % 2 == 0) {
        echo "$number is even";
    }
    else {
        echo "$number is odd"; }
?>

<?php
$number = 10;
echo ++$number;
echo --$number;
?>

<?php
$mark = 85;

if ($mark >= 90) {
    $grade = "A"; }
elseif ($mark >= 80){
    $grade = "B"; }
elseif ($mark >= 70){
    $grade = "C"; }
elseif ($mark >= 60){
    $grade = "D"; }
else $grade = "F";
    
echo "You got a " . $grade "!";


?>

<?php
$year = 2024
    if(($year % 4 == 0 && $year % 100 != 0)
        || ($year % 400 == 0)) {
        echo $year ." is a leap year.";
    else echo $year ." is not a leap year.";
    }


?>