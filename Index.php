<?php
require_once('People.php');
require_once('Planet.php');

$people = new People('People','90kg');
$planet = new Planet('Planete','10 000kg');

$people->nameAndMass();

$planet->nameAndMass();