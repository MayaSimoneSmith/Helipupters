<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$x = 100;

function newCalc($x) {
$newnr = $x * 0.50;
echo "Here is 50% of what you wrote:" .$newnr;
}
$x = 100;
newCalc($x);
echo "<br>";
$a = 10;
newCalc($a);
echo "<br>";
$c = 50;
newCalc($c);

?>
</body>
</html>