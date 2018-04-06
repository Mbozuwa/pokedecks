<?php

class Pikachu extends Pokemon {
	public $name;
	public $energyType = 'lightning';
	public $hitpoints = '60';
	public $health = '60';
	public $resistance = 'fightning';
	public $attacks = [];
	public $weakness;
	public $resistance;


	public function __construct($name) {

		$this->name = $name;
		$attacks = [new Attack('Electric Ring', 50), new Attack('Pike Punch', 20)];
		$weakness = new weakness('fire', '1.5');
		$resistance = new resistance('fighting, 20');
		parent::__construct($name, $this->energyType, $this->hitpoints, $this->health, $attacks, $weakness , $resistance);
	}
}