<?php


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