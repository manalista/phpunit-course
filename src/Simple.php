<?php

namespace AndreusTimm\PHPUnit;

class Simple 
{
	private $number; 

	public function __construct($number)
	{
		$this->number = $number;
	}

	public function divide(float|int $divisor)
	{
		if (empty($divisor)) {
			throw new \InvalidArgumentException("Divisor must be a number or > 0");
		}

    	return $this->number / $divisor;
	}

	public function multiply(float|int $number){
		return $this->number * $number;
	}

	public function add(float|int $number){
		return $this->number + $number;
	}

	public function subtract(float|int $number){
		return $this->number - $number;
	}

	public function power($exponent){
		return $this->number ** $exponent;
	}

	public function sqrt(){
		return sqrt($this->number);
	}
}
