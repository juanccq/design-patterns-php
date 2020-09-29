<?php
include_once 'CondimentDecorator.php';
include_once 'Beverage.php';

class Mocha extends Beverage {
    protected Beverage $beverage;

    public function __construct( Beverage $beverage ) {
        $this -> beverage = $beverage;
    }

    public function getDescription() {
        return $this -> beverage -> getDescription()  . ', Mocha';
    }

    public function cost() {
        return $this -> beverage -> cost() + 0.20;
    }
}