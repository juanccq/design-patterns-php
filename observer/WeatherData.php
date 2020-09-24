<?php
include_once 'Subject.php';
include_once 'Observer.php';

class WeatherData implements Subject {

    private array $observers = [];
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function registerObserver( Observer $o ) {
        array_push( $this -> observers, $o );
    }

    public function removeObserver( Observer $o ) {
        foreach( $this -> observers as $key => $cObs ) {
            if( $cObs == $o ) {
                unset( $this -> observers[ $key ] );
                break;
            }
        }
    }

    public function notifyObservers() {
        foreach( $this -> observers as $observer ) {
            $observer -> update( $this -> temperature, $this -> humidity, $this -> pressure );
        }
    }

    public function getTemperature() {

    }

    public function getHumidity() {

    }

    public function getPressure() {

    }

    public function measurementsChanged() {
        $this -> notifyObservers();
    }

    public function setMeasurements( float $temperature, float $humidity, float $pressure ) {
        $this -> temperature = $temperature;
        $this -> humidity = $humidity;
        $this -> pressure = $pressure;

        $this -> measurementsChanged();
    }
}