<?php

require '../vendor/autoload.php';

$client = new \MongoDB\Client();
$companyDb = $client->companydb;
$empCollection = $companyDb->empCollection;

//$updateResult = $empCollection->updateOne(
//    [
//        'age' => '20'
//    ],
//    ['$set' => ['age' => '28']]
//);
//
//var_dump($updateResult->getMatchedCount());

//$updateResult = $empCollection->updateMany(
//    [
//        'skill' => 'php'
//    ],
//    ['$set' => ['manager' => 'Tim']]
//);
//
//var_dump($updateResult->getMatchedCount());


$updateResult = $empCollection->replaceOne(
    [
        '_id' => '3'
    ],
    ['_id' => '3', ['favColor' => 'blue']]
);

var_dump($updateResult->getMatchedCount());