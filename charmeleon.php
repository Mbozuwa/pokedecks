<?php

class charmeleon extends pokemon {
	public $name = 'charmeleon';
	public $energyType = 'fire';
	public $hitpoints = '60';
	public $attacks = ['Head Butt', 'Flare'];
	public $weakness = 'water';
	public $resistance = 'lightning';


public function __constrct($name) {

	$this->name = $name;
	$attacks = array
		(new Attack(myName: 'Headbutt', myDamage: 10),
		(new Attack(myName: 'Flare', myDamage: 30),
	);
	$weakness = new weakness("fire, 1.5");
	$resistance = new resistance("fighting, 20");
}