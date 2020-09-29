<?php
include_once 'Beverage.php';

class DarkRoast extends Beverage {

    public function __construct() {
        $this -> description = 'Dark roast';
    }

    public function cost() {
        return 0.99;
    }
}