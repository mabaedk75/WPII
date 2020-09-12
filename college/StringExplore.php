<!DOCTYPE html>
<html>
<body>

<?php

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}


$str = "Hey Deepa! Good to see you here ;)";
echo bin2hex($str) . "<br>";
echo pack("H*",bin2hex($str)) . "<br>";

print_r (explode(" ",$str));

echo"<br>";

echo str_pad($str,50,".");

echo "<br>";

$number = 7;
$stre = "India";
$file = fopen("test.txt","w");
echo fprintf($file,"There are %u million bicycles in %s.",$number,$stre);

echo "<br>";
$arr = array('Hello','User!','Have a great','day!');
echo implode(" ",$arr);

echo"<br>";

echo levenshtein("Lovely Sunshine","vely shine");
echo "<br>";
echo levenshtein("Lovely Sunshine","vely shine",10,20,30);

echo "<br>";

echo metaphone("Onomatopoeia");

echo"<br>";

$strin = "Age:20 Weight:54kg FaceCut:Round";
sscanf($strin,"Age:%d Weight:%dkg FaceCut:%s" ,$Age,$Weight,$FaceCut);
// show types and values
var_dump($Age,$Weight,$FaceCut);

echo "<br>".wordwrap($str,15,"<br>\n")."<br>";

var_dump(checkdate(12, 50, 2000));

echo "<br>";

var_dump(validateDate('Tue, 28 Feb 2012 12:12:12 +0200', DateTime::RSS));

echo "<br>";

var_dump(validateDate('Tue, 27 Feb 2012 12:12:12 +0200', DateTime::RSS));

echo "<br>";

$localtime = localtime();
$localtime_assoc = localtime(time(), true);
print_r($localtime);
print_r($localtime_assoc);

?> 
 
</body>
</html>