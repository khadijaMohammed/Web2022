
<?php
// PHP String Functions

echo strlen("Hello world!"); // outputs 12
echo str_word_count("Hello world!"); // outputs 2
echo strrev("Hello world!"); // outputs !dlrow olleH
echo strpos("Hello world!", "world"); // outputs 6

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo substr("Hello world!", 4,7); // عدد الحروف المقطوعة 
///
$str="Hello world!,hh";
echo substr($str, 0,strpos("$str",'!')+1);
?>


<?php
//concatination
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print  $x + $y;
echo $txt1 .' '.$txt2 ;

?>