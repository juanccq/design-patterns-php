<?php
include_once 'Beverage.php';

class HouseBlend extends Beverage {
    public function __construct() {
        $this -> description = 'House Blend Coffe';
    }

    public function cost() {
        return 0.89;
    }
}