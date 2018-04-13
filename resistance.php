<?php

class Resistance
{

public $energyType;
public $multiplier;

public function __construct($energyType, $multiplier)
	{
		$this->energyType = $energyType;
		$this->multiplier = $multiplier;
	}
}