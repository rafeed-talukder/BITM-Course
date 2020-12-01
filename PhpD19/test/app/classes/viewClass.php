<?php
//second way of making classes..
//ami namespace a j txt ta use korbo oita oita amader class er object create korer somoy object er age text ta dia dite hbe must***....
namespace App\classes ;

class viewClass
{
    public function view (){
        if (isset($_POST['btn'])){
            $a=$_POST["input"];
            $b=strlen($a);
            $c=str_word_count($a);
            $result=[
                "stringsize"=>$b,
                "stringword" =>$c
            ];
            return $result;
        }
}
}