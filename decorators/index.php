<?php
include_once 'Espresso.php';
include_once 'DarkRoast.php';
include_once 'Mocha.php';
include_once 'Whip.php';

$beverage = new Espresso();
echo "\n\r{$beverage -> getDescription()} $.-{$beverage -> cost()}";

$beverage2 = new DarkRoast();
$beverage2 = new Mocha( $beverage2 );
$beverage2 = new Mocha( $beverage2 );
$beverage2 = new Whip( $beverage2 );
echo "\n\r{$beverage2 -> getDescription()} $.-{$beverage2 -> cost()}";