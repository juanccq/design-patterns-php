<?php
include_once 'Observer.php';
include_once 'Subject.php';
include_once 'DisplayElement.php';

class CurrentConditionsDisplay implements Observer, DisplayElement {

    private float $temperature;
    private float $humidity;
    private Subject $weatherData;

    public function __construct( Subject $weatherData ) {
        $this -> weatherData = $weatherData;
        $this -> weatherData -> registerObserver( $this );
    }

    public function update( float $temp, float $humidity, float $pressure ) {
        $this -> temperature = $temp;
        $this -> humidity = $humidity;

        $this -> display();
    }


    public function display() {
        echo "\n\rCurrent conditions: {$this -> temperature}F degrees and {$this -> humidity}% humidity.";
    }

}