<?php
include_once 'WeatherData.php';
include_once 'CurrentConditionsDisplay.php';
include_once 'StatisticsDisplay.php';

$wd = new WeatherData();
$currentCD = new CurrentConditionsDisplay( $wd );
$statisticDisplay = new StatisticsDisplay( $wd );

$wd -> setMeasurements( 20, 45, 77 );
$wd -> setMeasurements( 54, 10, 85 );
$wd -> setMeasurements( 18, 58, 70 );