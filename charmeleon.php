<?php

class charmeleon extends pokemon {
	public $name;
	public $energyType = 'fire';
	public $hitpoints = '60';
	public $health = '60';
	public $attacks = [];
	public $weakness;
	public $resistance;


	public function __construct($name) {

	$this->name = $name;
	$attacks = [new Attack('Headbutt', 10), new Attack('Flare', 30)];
	$weakness = new weakness('water, 2');
	$resistance = new resistance('lightning', '10');
	parent::__construct($name, $this->energyType, $this->hitpoints, $this->health, $attacks, $weakness, $resistance);
}	
}