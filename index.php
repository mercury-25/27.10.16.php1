<?php
require_once 'PreBase.php';
$sum=new PreBase($a,$b);
$sum->sum(2,4);
echo $sum->out($res);
?>