<?php
//-------------------Basic Function Syntax-----------------------
function name (){
    $firstName="rafeed";
    $lastName="talukder";
    $finalName=$firstName." ".$lastName;
    echo $finalName;
}
name();
echo "<br>";
echo "<br>";
//-------------------Using Parameter & Arguments Function Syntax-----------------------
function name2 ($firstName,$lastName){

    $finalName=$firstName." ".$lastName;
    echo $finalName;
}
name2('rafeed','talukder');
echo "<br>";
name2('rahat','talukder');
echo "<br>";
name2('this is ','ton');
echo "<br>";




function name3 ($firstName=null,$lastName=null){
    $finalName=$firstName." ".$lastName;
    echo $finalName;
}
name3('rafeed');
echo "<br>";
name3('rahat','talukder');
echo "<br>";
name3('this is ','ton');
echo "<br>";
name3(10,20);
echo "<br>";
name3(10);
echo "<br>";


function name4 ($firstName=null,$lastName=null){
    $finalName=$firstName." ".$lastName;
    return $finalName;
}
echo name4('rafeed');
echo "<br>";
echo name4('rahat','talukder');
echo "<br>";
$ton =name4('this is ','ton');
echo  "<h1>". $ton."<h1>";
//echo "<br>";
echo name3(10,20);
echo "<br>";
echo name4(10);
echo "<br>";

