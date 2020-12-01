<?php


class OddEven
{
    public $firstnum;
    public $secondnum;
    public $checkbtn;

    public function oddevencheck(){
      if(isset($_POST["btn"])){
         $a= $this->firstnum=$_POST["fnum"];
         $b= $this->secondnum=$_POST["lnum"];
         $c= $this->checkbtn=$_POST["check"];
         $res="";
          if ($a<$b){
              for ($a;$a<=$b;$a++){
                  if ($a%2!=0 && $c=="Odd" ){
                      $res=$res.$a." "." ";
                  }
                  elseif($a%2==0 && $c=="Even"){
                  $res=$res.$a." "." ";
                  }
              }
              return $res;
          }
          elseif ($a>$b){
              for ($a;$a>=$b;$a--){
                  if ($a%2!=0 && $c=="Odd" ){
                      $res=$res.$a." "." ";
                  }
                  elseif($a%2==0 && $c=="Even"){
                      $res=$res.$a." "." ";
                  }
              }
              return $res;
          }

      }
  }
}