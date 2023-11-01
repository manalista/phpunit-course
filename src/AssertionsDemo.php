<?php

namespace AndreusTimm\PHPUnit;

class AssertionsDemo
{
	public function getNumber():int
	{
		return 5;
	}

	public function getNull():null
	{
		return null;
	}

	public function getTrue():bool
	{
		return true;
	}

	public function getFruits():array
	{
		return [
			'peach' => 'sweet',
			'melon' => 'watery',
			'apple' => 'sour',
			'banana' => 'amazing'
		];
	}

	public function getJsonFruits():string
	{
		return json_encode($this->getFruits());
	}
}
