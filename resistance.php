<?php 

class Resistance {
	public $resistanceType;
	public $multiplier;

	public function __construct($resistanceType, $myMultiplier){
		$this->resistanceType = $myresistanceType;
		$this->multiplier = $myMultiplier;
	}

	public function __toString() {
    	return json_encode($this);
    }
}