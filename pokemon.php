<?php 

class Pokemon {

	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $attacks = array();
	public $weakness;
	public $resistance;

	public function __construct($name, $energyType, $hitpoints, array $attacks, $weakness, $resistance){
		$this->name = $name;
		$this->energyType = $energyType;
		$this->hitpoints = $hitpoints;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function __toString(){
		return json_encode($this);
	}

	public function printHitpoints(){
		echo '<h1>' . $this->name . ' - ' .  $this->hitpoints . 'Hitpoints' . '</h1>';
	}

// Do an attack on Charmeleon with attack

	public function attack($target, $attack) {
		$target->defend($this->energyType, $attacks);
	}

	public function defend($attack) {
		
	}

}

