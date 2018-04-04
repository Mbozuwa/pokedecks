<?php 

class Pokemon {

	public $name;
	public $energyType;
	public $hitpoints;
	public $attacks;
	public $weakness;
	public $resistance;

	function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance){
		$this->name = $name;
		$this->energyType = $energyType;
		$this->hitpoints = $hitpoints;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	function attack (){
		
	}
}