<?php

class pikachu extends pokemon {
	public $name = 'pikachu';
	public $energyType = 'lightning';
	public $hitpoints = '60';
	public $attacks = [];
	public $weakness = 'fire';
	public $resistance = 'fighting';


public function __constrct($name) {

	$this->name = $name;
	$attacks = array
		(new Attack(myName: 'Electric Ring', myDamage: 50),
		(new Attack(myName: 'Pike Punch', myDamage: 20),
	);
	$weakness = new weakness("fire, 1.5");
	$resistance = new resistance("fighting, 20");
}