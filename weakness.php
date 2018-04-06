<?php

class Weakness {
	public $WeaknessType;
	public $Devider;

	public function __construct($MyWeaknessType, $MyDevider){
		$this->WeaknessType = $MyWeaknessType;
		$this->Devider = $MyDevider;
	}

	public function __toString() {
    	return json_encode($this);
    }
}