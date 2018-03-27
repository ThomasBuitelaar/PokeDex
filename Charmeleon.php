<?php

class Charmeleon extends Pokemon
{
	public $name = "Charmeleon";
	public $energyType = "Fire";
	public $health = 60;
	public $weakness = "Water";
	public $weaknessMultiplier = 2;
	public $resistance = 'Lightning';
	public $resistanceMultiplier = 10;
	public $attack = array(array("Head Butt", 10), array("Flare", 30));

	public function __construct($name)
	{
		parent::__construct($name, $this->energyType, $this->health, $this->weakness, $this->weaknessMultiplier, $this->resistance, $this->resistanceMultiplier, $this->attack);
	}
}