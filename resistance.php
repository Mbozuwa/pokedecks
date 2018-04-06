<?php 

class Resistance {
	public $resistanceType;
	public $multiplier;

	public function __construct($myResistanceType, $myMultiplier){
		$this->resistanceType = $myResistanceType;
		$this->multiplier = $myMultiplier;
	}

	public function __toString() {
    	return json_encode($this);
    }
}