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

// Do an attack on Charmeleon with attack

	// public function attack($target, $attack) {
	// 	$target->defend($this->energyType, $attacks);
	// }

	// public function defend($attack) {
		
	// }

	public function attack($target, $att)
    {
        foreach ($this->attacks as $attack) {
            if ($attack->name == $att) {
                $damage = $attack->damage;
                if ($this->energyType == $target->resistance->energyType) {
                    $damage = $damage - $target->resistance->worth;
                }
                if ($this->energyType == $target->weakness->energyType) {
                    $damage = $damage * $target->weakness->multiplier;
                }
                $newHealth = $target->health - $damage;
                $target->health = $newHealth;
            }
        }
    }


}
