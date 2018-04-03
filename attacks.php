<?php 
	
class attack{
	public $name;
	public $damage;

	public function __construct($myName, $myDamage){
		$this->name = $myName;
		$this->damage = $myDamage;
	}
}