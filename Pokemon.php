<?php

class Pokemon
{
	public $name;
	public $energyType;
	public $health;
	public $weakness;
	public $weaknessMultiplier;
	public $resistance;
	public $resistanceMultiplier;
	public $attack = array();

	public function __construct($name, $energyType, $health, $weakness, $weaknessMultiplier, $resistance, $resistanceMultiplier, $attack)
	{
		$this->name = $name;
		$this->energyType = $energyType;
		$this->health = $health;
		$this->weakness = $weakness;
		$this->weaknessMultiplier = $weaknessMultiplier;
		$this->resistance = $resistance;
		$this->resistanceMultiplier = $resistanceMultiplier;
		$this->attack = $attack;
	}

	public function __toString()
	{
		return json_encode($this);
	}
}