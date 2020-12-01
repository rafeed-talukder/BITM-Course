<?php
require_once "demoOne.php";

class Demotwo extends demoOne
{
    public $name="rafeed";
    private $edu="BSc";
    protected $varsity="UAP";


    public function classfour()
    {
       $this->classone();
       $this->classfive();
    }

    private function classfive()
    {
//        $this->classfour();
        echo $this->name;
        $this->classsix();
    }

    private function classsix()
    {
        echo "class6";
    }

}