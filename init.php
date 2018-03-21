<?php

spl_autoload_register(function($class){
	// require_once "pokedecks/{$class}.php";
	echo $class;
});