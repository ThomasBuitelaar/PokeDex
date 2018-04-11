<?php
class Resistance {
	public $energyType;
	public $multiplier;

	public function __construct($energyType, $multiplier)
	{
		$this->energytype = $energyType;
		$this->multiplier = $multiplier;
	}
}