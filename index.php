<?php

require 'pokemon.php';
require 'pikachu.php';
require 'charmeleon.php';
require 'weakness.php';
require 'resistance.php';
require 'attack.php';

$pikachu = new Pikachu('Pikachu');
$pikachu->showData();

$charmeleon = new Charmeleon('Charmeleon');
$charmeleon-> showData();

$pikachu->Attacks($charmeleon, 'Electric Ring');
print_r('<pre>'. $charmeleon . '</pre>');

$charmeleon->Attacks($pikachu, 'Flare');
print_r('<pre>'. $pikachu . '</pre>');

$charmeleon->Attacks($pikachu, 'Head Butt');
print_r('<pre>'. $pikachu . '</pre>');