<?php


class HW1
{
 private $a;
 private $b;
 public function __construct($avalue,$bvalue)
 {
    $this->a = $avalue;
    $this->b= $bvalue;
 }
 public function range(){
     for ( $this->a;$this->a<=$this->b;$this->a++ ){
         echo $this->a." ";
     }
 }
}