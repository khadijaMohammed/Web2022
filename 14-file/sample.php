



<html>
<body>
<div class="menu">
<?php include 'menu.php';?>
</div>
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';
echo "I have a $color $car.";
?>

<?php require 'footer.php';
echo "I have a $color $car.";
?>

</body>
</html>


<?php
echo readfile("webdictionary.txt");
?>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
//https://www.w3schools.com/php/php_file_open.asp


?>







