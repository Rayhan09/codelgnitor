<?php

class calculator
{
    public $number1= "";
    public $number2 = "";

    public function add ($a= '', $b= ''){
        $this ->number1 = $a;
        $this ->number2  = $b;

        echo "output of addition " . ($this->number1 + $this->number2)."<br/>";
    }
    public function sub ($a='',$b=''){

        $this ->number1 = $a;
        $this ->number2  = $b;

        echo "output of substraction ".($this->number1 - $this->number2);

    }

}




