<?php

class calculator
{
    public $number1= "";
    public $number2 = "";

    public function prepare ($data){

        echo "<pre>";
        print_r($data);
        $this ->number1 = $data['num1'];
        $this ->number2  = $data['num2'];

        return $this;

    }
    protected function test(){
        echo "output form addition"."<br/>";
        return $this;

    }
    public function sub (){
        echo "output of substraction ";

    }
}

class Sony extends calculator{
    public function good(){
        $ob = new calculator();
        return $ob ->test();
    }
}