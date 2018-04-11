<?php
class Pikachu extends Pokemon
{
	public function __construct($name)
	{
		$pikachuAttack1 = new Attack('Electric Ring', 50);
		$pikachuAttack2 = new Attack('Pika Punch', 20);
		$pikachuWeakness = new Weakness('Fire', 1.5);
		$pikachuResistance = new Resistance('Fighting', 20);

		parent::__construct($name, 'Lightning', 60,[$pikachuAttack1, $pikachuAttack2], $pikachuWeakness, $pikachuResistance);
	}
}
