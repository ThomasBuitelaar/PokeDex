<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

$pikachu = new Pikachu('Pikachu');
$pikachu->showData();

$charmeleon = new Charmeleon('Charmeleon');
$charmeleon-> showData();

$pikachu->Attacks($charmeleon, 'Electric Ring');
//print_r('<pre>'. $charmeleon . '</pre>');

$charmeleon->Attacks($pikachu, 'Flare');
//print_r('<pre>'. $pikachu . '</pre>');

$charmeleon->Attacks($pikachu, 'Head Butt');
//print_r('<pre>'. $pikachu . '</pre>');