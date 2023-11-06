<?php

namespace AndreusTimm\PHPUnit;

class Simple 
{
	private $number; 

	public function __construct($number)
	{
		$this->number = $number;
	}

	public function sum(float|int $sum):float
	{
    	return $this->number + $sum;
	}

	public function subtract(float|int $sub):float
	{
    	return $this->number - $sub;
	}

	public function divide(float|int $divisor)
	{
		if (empty($divisor)) {
			throw new \InvalidArgumentException("Divisor must be a number or > 0");
		}

    	return $this->number / $divisor;
	}

	public function multiply(float|int $multiply):float
	{
    	return $this->number * $multiply;
	}
}
