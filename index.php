<?php 

require 'pokemon.php';
require 'attacks.php';
require 'pikachu.php';
require 'charmeleon.php';
require 'energyType.php';
require 'weakness.php';
require 'resistance.php';

$pikachu = new Pikachu("pikachu");
$charmeleon = new Charmeleon("charmeleon");

$pikachu->printHitpoints();
$charmeleon->printHitpoints();
?>


<?php
$pikachu->attack($charmeleon , 1);
$charmeleon->printHitpoints();
?>

<?php
$charmeleon->attack($pikachu , 1);
$pikachu->printHitpoints();

