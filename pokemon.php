<?php 

class Pokemon {

	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $attacks = array();
	public $weakness;
	public $resistance;

	public function __construct($name, $energyType, $hitpoints, $health, array $attacks, $weakness, $resistance){
		$this->name = $name;
		$this->energyType = $energyType;
		$this->hitpoints = $hitpoints;
		$this->health = $health;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function __toString(){
		return json_encode($this);
	}

	public function printHitpoints(){
		echo '<h1>' . $this->name . ' - ' .  $this->hitpoints . 'Hitpoints' . '</h1>';
	}

	public function attack($target, $att)
    {
        foreach ($this->attacks as $attack) {
            if ($attack->name == $att) {
                $damage = $attack->damage;
                if ($this->energyType == $target->resistance->resistanceType) {
                    $damage = $damage - $target->resistance->multiplier;
                }
                if ($this->energyType == $target->weakness->weaknessType) {
                    $damage = $damage * $target->weakness->devider;
                }
                $newHealth = $target->health - $damage;
                $target->health = $newHealth;
            }
        }
    }


}
