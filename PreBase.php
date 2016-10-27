<?php
require_once 'Base.php';
class PreBase implements Base{
    public $a, $b, $res;
    public function sum($a, $b)
    {
    $this->res=$this->a + $this->b;
    }
    public function out($res)
    {
    return $this->res;
  }
}
?>