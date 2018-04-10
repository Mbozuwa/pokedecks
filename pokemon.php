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

	public function attack($target,$attacknr) {
  		$target->defend($this->attacks[$attacknr], $this->energyType);
	}

	public function defend($attack,$attackerEnergytype) {
		echo 'This is the target:' .$this->name;
		echo '<br>';
		echo $attack;
		echo '<br>';
		echo $this->hitpoints;
		echo '<br>';

      if ($this->resistance == $attackerEnergytype) {
      $newDamage =  $this->hitpoints - $attack->damage - 10;
      $this->hitpoints = $this->hitpoints - $newDamage;
      }
      elseif($this->weakness == $attackerEnergytype) {
      $newDamage =  $this->hitpoints - $attack->damage * 2;
      $this->hitpoints = $this->hitpoints - $newDamage;

      } else {
      $newDamage =  $this->hitpoints - $attack->damage;
      $this->hitpoints = $this->hitpoints - $newDamage;;
      }

      echo "<br>";
      echo 'This is the damage that is done: ' . $newDamage;
      echo "<br>";
      echo 'This is the health now: ' . $this->hitpoints;
      echo "<br><br>";}


}
