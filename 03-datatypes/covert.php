
<?php
// to covert value data type


$float_var=1.5;
$int_var=intval($float_var);
echo $int_var;
$str_var=strval($float_var);

var_dump($int_var);
var_dump($str_var);

$str="Hello";
$float=floatval($str);
var_dump($float);
?>

