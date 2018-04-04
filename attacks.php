<?php  
	
class Attack{
	public $name;
	public $damage;

	public function __construct($myName, $myDamage){
		$this->name = $myName;
		$this->damage = $myDamage;
	}

	public function __toString() {
    	return json_encode($this);
    }
}