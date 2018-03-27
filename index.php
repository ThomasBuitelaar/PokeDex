<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

$Charmeleon = new Charmeleon('Charmeleon');
$Pikachu = new Pikachu('Pikachu');

print_r('<pre>'.$Pikachu.'</pre>');
print_r('<pre>'.$Charmeleon.'</pre>');