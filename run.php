<?php
require_once __DIR__ . '/vendor/autoload.php';


use Repository\NumberlistRepositoryJSON;


$NumberRepository = new NumberlistRepositoryJSON();

$NumberCalculator = new NumberCalculator($NumberRepository,2020);

$foundMatches = [];

foreach($NumberRepository->getNumbers() as $thisNumber)
{
    $foundMatches += $NumberCalculator->getMatchedNumber($thisNumber);
}
print_r($foundMatches);