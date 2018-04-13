<?php

class Pokemon
{
	public $name;
	public $energyType;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name, $energyType, $health, $attacks, $weakness, $resistance)
	{
		$this->name = $name;
		$this->energyType = $energyType;
		$this->health = $health;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function __toString()
	{
		return json_encode($this);
	}


	public function attacks($attackedPokemon, $attackName)
	{
		$totalDamage = 0;
		$attackDamage= 0;
		echo "<br>";
		echo $this->name.' Attacks '. $attackedPokemon->name.' With '.$attackName;
		foreach($this->attacks as $availableAttack)
		{
			if($availableAttack->name == $attackName)
			{
				$attackDamage = $availableAttack->damage;
			}
		}
		$totalDamage = $attackDamage;
		if($this->energyType == $attackedPokemon->weakness->energyType)
		{
			$totalDamage = $attackedPokemon->weakness->multiplier*$attackDamage;
		}
		if($this->energyType == $attackedPokemon->resistance->energyType)
		{
			$totalDamage = $totalDamage - $attackedPokemon->resistance->multiplier;
		}
		echo "<br>Does ". $totalDamage . " damage.";
		$attackedPokemon->health = $attackedPokemon->health - $totalDamage;

		echo "<br>".$attackedPokemon->name."&#39;s current health is ". $attackedPokemon->health ."<br>";
	}
	public function showData()
	{
		echo "<h3>".$this->name."</h3>";
		echo "Type: ".$this->energyType."<br>";
		echo "HP: ".$this->health."<br>";
		echo "Attacks: ";
		foreach($this->attacks as $key)
		{
			echo "<li>".$key->name . ", ";
			echo $key->damage . "</li>";
		}
		echo "<br>";

		echo "Weakness: ";
		echo $this->weakness->energyType . " with a multiplier of ";
		echo $this->weakness->multiplier . 'x<br>';

		echo "Resistance: ";
		echo $this->resistance->energyType . " with a multiplier of ";
		echo $this->resistance->multiplier . "x<br>";
		echo "========================= <br>";
	}
}

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


class Weakness
{

public $energyType;
public $multiplier;

public function __construct($energyType, $multiplier)
	{
		$this->energyType = $energyType;
		$this->multiplier = $multiplier;
	}
}

class Attack{

	public $name;
	public $damage;

	public function __construct($name, $damage)
	{
		$this->name = $name;
		$this->damage = $damage;
	}
}