<?php


class demoOne
{
    public $age="25";
    protected $mobile="01710658900";
    private $location="sj";
    public $b;
    public function __construct()
    {
//         $this->b=$a;
        echo "class constructor";
    }

    public function classone(){
        echo $this->location;
        echo '<br>';
        echo $this->classthree();
        echo '<br>';
        echo $this->mobile;
        echo '<br>';
    }

    protected function classtwo(){
//        echo $this->b;
        echo "class two";
    }

    private function classthree(){
        echo "class three";
        echo '<br>';
        echo $this->classtwo();
        echo '<br>';
    }
}