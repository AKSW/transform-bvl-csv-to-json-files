<?php

require_once 'vendor/autoload.php';

$buildingArray = loadCSVFileIntoArray('./source.csv');

$buildingIndexArray = array();

foreach ($buildingArray as $key => $value) {
    $long = $value[10];
    $lat = $value[11];
    $id = $value[12];

    $buildingIndexArray[$id] = array(
        'longitude' => (float)$long,
        'latitude' => (float)$lat,
    );
}

file_put_contents('result/building-coordinates.json', json_encode($buildingIndexArray));
