<?php

abstract class Beverage{
    protected $description = "Unknown beverage";

    public function getDescription() {
        return $this -> description;
    }

    public abstract function cost();
}