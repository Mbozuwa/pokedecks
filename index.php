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

<p>Pikachu valt Charmeleon aan met een Electric Ring attack</p>

<?php
$pikachu->attack($charmeleon , "Electric Ring");
$charmeleon->printHitpoints();
?>

<p>Charmeleon valt Pikachu aan met een Flare attack</p>
<?php
$charmeleon->attack($pikachu , "Flare");
$pikachu->printHitpoints();

