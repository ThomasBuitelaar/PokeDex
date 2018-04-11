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

		echo "<br>".$attackedPokemon->name."&#39;s current health is ". $attackedPokemon->health;
	}
	public function showData()
	{
		echo "<h3>".$this->name."</h3>";
		echo "Type: ".$this->energyType."<br>";
		echo "Health: ".$this->health."<br>";
		echo "Attacks and damage: ";
		foreach($this->attacks as $key)
		{
			echo "<li>".$key->name . ",";
			echo $key->damage . "</li>";
		}
		echo "<br>";

		echo "Weakness: ";
		echo $this->weakness->energyType . ",";
		echo $this->weakness->multiplier . '<br>';

		echo "Resistance: ";
		echo $this->resistance->energyType . ",";
		echo $this->resistance->multiplier . "<br>";
		echo "========================= <br>";
	}
}