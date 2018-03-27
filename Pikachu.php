<?php

class Pikachu extends Pokemon
{
	public $name = "Pikachu";
	public $energyType = "Lightning";
	public $health = 60;
	public $weakness = "Fire";
	public $weaknessMultiplier = 1.5;
	public $resistance = 'Fighting';
	public $resistanceMultiplier = 20;
	public $attack = array(array("Electric Ring", 50), array("Pika Punch", 20));

	public function __construct($name)
	{
		parent::__construct($name, $this->energyType, $this->health, $this->weakness, $this->weaknessMultiplier, $this->resistance, $this->resistanceMultiplier, $this->attack);
	}
}
