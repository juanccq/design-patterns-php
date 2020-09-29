<?php
include_once 'CondimentDecorator.php';
include_once 'Beverage.php';

class Whip extends Beverage {
    protected Beverage $beverage;

    public function __construct( Beverage $beverage ) {
        $this -> beverage = $beverage;
    }

    public function getDescription() {
        return $this -> beverage -> getDescription()  . ', Whip';
    }

    public function cost() {
        return $this -> beverage -> cost() + 0.10;
    }
}