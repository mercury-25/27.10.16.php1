<?php
require_once 'Base.php';
class ProBase implements Base{
    public $a, $b, $res;
    public function __construct ($a,$b){
        $this -> a = $a;
        $this -> b = $b;
    }
    public function sum($a, $b)
    {
        $this->res=$a+$b;
    }
    public function out()
    {
        return $this->res;
    }
}
?>