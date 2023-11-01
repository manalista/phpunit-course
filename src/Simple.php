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
}
