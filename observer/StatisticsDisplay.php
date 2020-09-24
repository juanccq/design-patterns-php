<?php
include_once 'Observer.php';
include_once 'DisplayElement.php';
include_once 'Subject.php';

class StatisticsDisplay implements Observer, DisplayElement {

    private float $min;
    private float $max = 0;
    private float $temperature;
    private Subject $weatherData;

    public function __construct( $weatherData ) {
        $this -> weatherData = $weatherData;
        $this -> weatherData -> registerObserver( $this );
    }

    public function update( float $temp, float $humidity, float $pressure ) {
        $this -> temperature = $temp;

        if( $this -> temperature > $this -> max ) {
            $this -> max = $this -> temperature;

            if( empty( $this -> min ) ) {
                $this -> min = $this -> max;
            }
        }

        if( $this -> temperature < $this -> min ) {
            $this -> min = $this -> temperature;
        }

        $this -> display();
    }


    public function display() {
        echo "\n\rCurrent temparature {$this -> temperature}, with min: {$this -> min} and max: {$this -> max}";
    }
}