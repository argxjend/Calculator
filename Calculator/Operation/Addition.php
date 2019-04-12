<?php

class Addition implements OperationInterface
{
    public function evaluate($operands = array())
    {
        return array_sum($operands);
    }
}
