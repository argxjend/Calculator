<?php

class Calculator
{
    protected $operands = array();
    protected $operation;

    public function setOperands($operands = array())
    {
        $this->operands = $operands;
    }

    public function setOperand($operand) {
        $this->operands[] = $operand;
    }

    public function setOperation(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    public function process()
    {
        return $this->operation->evaluate($this->operands);
    }
}
