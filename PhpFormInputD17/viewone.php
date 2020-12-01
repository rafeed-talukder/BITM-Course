<?php
require_once "demoOne.php";
$newvalue="adad";
//$demoOne= new demoOne($newvalue);
$demoOne= new demoOne ();

$demoOne->classone();
require_once "Demotwo.php";

$demotwo=new Demotwo();
$demotwo->classfour();