<?php

//-----------------Arithmatic Operator-----------------
// 1.bainary operator
$a=10;
$b=5;
$c=$a+$b;
echo " Sum is "." "." $c";
echo "<br>";
echo "<br>";
echo "<br>";
$d=$a-$b;
echo " Sub is "." "." $d";
echo "<br>";
echo "<br>";
echo "<br>";
$e=$a*$b;
echo " Multiplication is "." "." $e";
echo "<br>";
echo "<br>";
echo "<br>";
$f=$a/$b;
echo " Division is "." "." $f";
echo "<br>";
echo "<br>";
echo "<br>";
$g=$a%$b;
echo " Reminder is "." "." $g";
echo "<br>";
// 1.unary operator
//$nm=$a++;
//echo "$nm";
//echo "$nm";

echo $a++;
//echo $a;
echo "<br>";
echo $a;
echo "<br>";
echo $a++;
echo "<br>";
echo $a;
echo "<br>";
//$nm=++$a;
echo ++$a;
echo "<br>";

echo $b--;
//echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $b--;
echo "<br>";
echo $b;
echo "<br>";
//$nm=++$a;
echo --$b;
echo "<br>";


//---------Conditional Statment--------------------


//-------------if else statment-------------------
if ($a<$b){
    echo $b;
}else{
    echo $a;
}
echo "<br>";
echo "<br>";

if ($a>$b){
    echo $b;
}else {
    echo $a;
}

echo "<br>";
echo "<br>";


//-------------if elseif statment-------------------

if ($a<$b){
    echo $b;
}elseif  ($a>$b){
    echo $a ." ture";
}else{
    echo "False";
}

echo "<br>";
echo "<br>";
$a = 50;
$b = 10;
if ($a != $b)
{
    echo "Hello World";
}

echo "<br>";
echo "<br>";
//-------------switch statment-------------------

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}


//-------------repeated statment-------------------
//-------------While loop-------------------

//while (condition is true) {
//    code to be executed;
//}

$x = 0;
while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=25;
}

//-------------do while loop-------------------

//do {
//    code to be executed;
//} while (condition is true);

$x = 1;
do {
    echo "The number is: $x <br>";
    $x++;
    echo "The  $x <br>";
} while ($x <= 5);


//-------------For loop-------------------

//for (init counter; test counter; increment counter) {
//    code to be executed for each iteration;
//}

$x = 0;
for ($x ; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}


//-------------Foreach loop-------------------

//foreach ($array as $value) {
//    code to be executed;
//}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}














?>


