<?php 

class Resistance {
	public $resistanceType;
	public $multiplier;

	public function __construct($ResistanceType, $Multiplier){
		$this->resistanceType = $ResistanceType;
		$this->multiplier = $Multiplier;
	}

	public function __toString() {
    	return json_encode($this);
    }
}