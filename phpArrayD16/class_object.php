<?php
class demo{
    public $fname='Rafeed';
    public $lname='Talukder';

    function add(){
        echo "add in";
    }
    function sub(){
        echo "sub out";
    }
}

$a= new demo();
echo $a->add();
echo "<br>";
echo $a->sub();
echo "<br>";
echo $a->fname;
echo "<br>";
echo $a->lname;
echo "<br>";
echo $a->fname.$a->lname;