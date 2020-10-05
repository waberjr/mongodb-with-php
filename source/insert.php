<?php

require '../vendor/autoload.php';

$client = new \MongoDB\Client();
$companydb = $client->companydb;
$empCollection = $companydb->empCollection;

//$insertOneResult = $empCollection->insertOne(
//    [
//        '_id' => '1',
//        'name' => 'Waber',
//        'age' => '20',
//        'skill' => 'php'
//    ]
//);

//echo "Inserted {$insertOneResult->getInsertedCount()} documents";
//var_dump($insertOneResult->getInsertedId());


$insertManyResult = $empCollection->insertMany([
    [
        '_id' => '2',
        'name' => 'Jason',
        'age' => '21',
        'skill' => 'php'
    ],
    [
        '_id' => '3',
        'name' => 'Max',
        'age' => '25',
        'skill' => 'php'
    ]
]);

echo "Inserted {$insertManyResult->getInsertedCount()} documents";
var_dump($insertManyResult->getInsertedIds());