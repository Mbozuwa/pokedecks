<?php

class Weakness {
	public $WeaknessType;
	public $Devider;

	public function __construct($WeaknessType, $Devider){
		$this->WeaknessType = $MyWeaknessType;
		$this->Devider = $MyDevider;
	}

	public function __toString() {
    	return json_encode($this);
    }
}