<?php

require_once ('TimeTravel.php');

$date = new DateTime('1985-12-31');
$dateToday = new DateTime();
$timeTravel = new Time\TimeTravel($date,$dateToday);
echo $timeTravel->getTravelInfo() ."<br>";


$interval = new DateInterval(' PT1000000000S') ;
echo $timeTravel->findDate($interval)->format(DateTime::COOKIE) . "<br>";

$intervalFuel = new DateInterval(' P1M8D') ;
$dateSteps = $timeTravel->backToFutureStepByStep($intervalFuel);
foreach ($dateSteps as $datestep) {
    echo $datestep . "<br>";
}