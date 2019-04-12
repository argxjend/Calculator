<?php

include_once 'Calculator/OperationInterface.php';
include_once 'Calculator/Calculator.php';
include_once 'Calculator/Operation/Addition.php';


$calculator = new Calculator;
$calculator->setOperands(array(2,4));

// or
//$calculator->setOperand(4);
//$calculator->setOperand(2);

$calculator->setOperation(new Addition);

echo $calculator->process(); // 6
