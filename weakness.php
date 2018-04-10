<?php

class Weakness {
	public $weaknessType;
	public $devider;

	public function __construct($MyWeaknessType, $MyDevider){
		$this->weaknessType = $MyWeaknessType;
		$this->devider = $MyDevider;
	}

	public function __toString() {
    	return json_encode($this);
    }
}