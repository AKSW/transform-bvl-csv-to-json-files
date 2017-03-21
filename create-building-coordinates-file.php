<?php

require_once 'vendor/autoload.php';

$buildingArray = loadCSVFileIntoArray('./source.csv');

$buildingIndexArray = array();

foreach ($buildingArray as $key => $value) {
    if ('Kategorie' == $value[0]) continue;

    $long = $value[10];
    $lat = $value[11];
    $id = $value[12];

    //
    if ('vollständig' == $value[2]) {
        $entranceSuitableForWheelchair = 2;
    } elseif ('teilweise' == $value[2]) {
        $entranceSuitableForWheelchair = 1;
    } else {
        $entranceSuitableForWheelchair = 0;
    }

    //
    if ('vollständig' == $value[5]) {
        $toiletSuitableForWheelchair = 2;
    } elseif ('teilweise' == $value[5]) {
        $toiletSuitableForWheelchair = 1;
    } else {
        $toiletSuitableForWheelchair = 0;
    }

    //
    $parkingForDisabledPeople = 0 < (int)$value[15] || 0 < (int)$value[17]
        ? 1 : 0;

    $parkingAvailable = 'ja' == $value[13] ? 1 : 0;

    $buildingIndexArray[$id] = array(
        'category' => $value[0],
        'title' => $value[1],
        'longitude' => (float)$long,
        'latitude' => (float)$lat,
        'entrance-suit-f-wheelchair' => $entranceSuitableForWheelchair,
        'lift-suit-f-wheelchair' => 'ja' == $value[3] ? 1 : 0,
        'lift-avail' => 'ja' == $value[4] ? 1 : 0,
        'toilet-avail' => 'ja' == $value[55] ? 1 : 0,
        'toilet-suit-f-wheelchair' => $toiletSuitableForWheelchair,
        'parking-avail' => $parkingAvailable,
        'parking-f-disabled-avail' => $parkingForDisabledPeople,
        'help-for-hearing-imp' => 'ja' == $value[75] ? 1 : 0,
        'help-for-blind' => 'ja' == $value[76] ? 1 : 0,
        'general-help' => 'ja' == $value[77] ? 1 : 0,
    );
}

file_put_contents('result/building-coordinates.json', json_encode($buildingIndexArray));
