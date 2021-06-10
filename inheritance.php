<?php
class Shap{
    protected $name;
    protected $area;
    function __construct($name)
    {
        $this->name=$name;
        $this->Calculation();
    }
    public function Calculation(){

    }
    public function getArea(){
        echo "this {$this->name} area is{$this->area}";
    }
}
class Triangle extends Shap {
    private $a,$b,$c;
    function __construct($a,$b,$c,$name){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        parent::__construct($name);
    }
    public function Calculation()
    {
        $perimeter=($this->a+$this->b+$this->c)/2;
        $this->area=2;
    }
}
$tr=new Triangle(2,2,2,"Triangle");
$tr->getArea();