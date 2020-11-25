<?php
//--------------------PHP Indexed Arrays---------------------------------------
$data=[];
$data[0]='rohim';
$data[1]='korim';
$data[2]='jorim';
$data[3]='rohim2';
$data[4]='korim2';
$data[5]='jorim2';
$data[6]=500;
$dataString=[];
$dataString['a']='rohim2';
$dataString['b']='korim2';
$dataString['c']='jorim2';

//echo $data;  //this will not give output,this is error.if we want to see indexing all value we have to use foreach loop.like bellow.
echo '<pre>';
print_r($data);

echo '<br>';
echo '<br>';
echo '<br>';

echo '<pre>';
var_dump($data);
echo '<br>';
foreach ($dataString as $a ){
    echo $a." ";
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";


$arrayLength=count($data);
echo $arrayLength;
echo "<br>";
for ($x=0; $x < $arrayLength; $x++){
    echo $data[$x];
    echo "<br>";
}

$cars = array("Volvo", "BMW", "Toyota");
$arrlengthcar = count($cars);
for ($x = 0; $x < $arrlengthcar; $x++) {
    echo $cars[$x];
    echo "<br>";
}


$dataNumString=[];
$dataNumString=[ 10,20,25,'i', 'am', 'rafeed'];
//echo $dataNumString[4];
foreach ($dataNumString as $newNumString ){
    echo $newNumString.' ';
    echo "<br>";

}
echo "<br>";
echo "<br>";
//--------------------PHP Indexed Arrays ends---------------------------------------


//--------------------PHP Associative Arrays--------------------------------------
$dataAssociative=[
    'name' => 'Rafeed', 'Age' => '24', 'Gender' => 'Male', 'City'=>'Dhaka'
];
echo $dataAssociative ['name'] .' ';
echo $dataAssociative ['Age'] .' ';
echo $dataAssociative ['Gender'] .' ';
echo $dataAssociative ['City'] .' ';
echo "<br>";
echo '<pre>';
print_r($dataAssociative);
foreach ($dataAssociative as $dataAssociativeValue){
    echo $dataAssociativeValue.' ';
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

foreach ($dataAssociative as $dataAssociative ['Age'] ){
    echo $dataAssociative  ['Age'] .' ';
    echo $dataAssociative ['Gender'].' ';
    echo "<br>";
}
foreach ($dataAssociative as $dataAssociativeValue){
    echo $dataAssociativeValue.' ';
    echo "<br>";
}

//--------------------PHP Associative Arrays ends--------------------------------------

//--------------------PHP Multidimentional Arrays starts--------------------------------------

$dataMulArray=[];
$dataMulArray[0][0]=10;
$dataMulArray[0][1]=20;
$dataMulArray[0][2]=30;

$dataMulArray[1][0]=40;
$dataMulArray[1][1]=50;
$dataMulArray[1][2]=60;

$dataMulArray[2][0]=70;
$dataMulArray[2][1]=80;
$dataMulArray[2][2]=90;

echo $dataMulArray[2] [1];
echo "<br>";
echo "<br>";
foreach ($dataMulArray as $mulValue){
    echo $mulValue[0]. ' '. $mulValue[2].' ' .$mulValue[1];
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
foreach ($dataMulArray as $mulValue){
//    echo $mulValue[0]. ' '. $mulValue[2].' ' .$mulValue[1];

    foreach ($mulValue as $newMulValue){
        echo $newMulValue.' ';
    }
    echo "<br>";
    echo "<br>";
}



$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
for ($row=0;$row<4;$row++){
    echo "<h3>row Number  $row</h3>"  ;

    for ($col=0;$col<3;$col++){
        echo "<li>".$cars[$row][$col]."</li> ";
    }
}

//--------------------PHP Multidimentional Arrays starts--------------------------------------



