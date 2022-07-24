

<?php
/*
PHP has three different variable scopes:

local
global
static
*/

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  //echo "<p>Variable x inside function is: $GLOBALS $x </p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
 

 <?php
function myTest1() {
  $x = 10; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<?php
function myTest2() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest2();
myTest2();
myTest2();
?>


<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>



<?php
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>
