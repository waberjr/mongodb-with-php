<?php

require '../vendor/autoload.php';

$client = new \MongoDB\Client();
$companyDb = $client->companydb;
$empCollection = $companyDb->empCollection;

//$deleteResult = $empCollection->deleteOne(
//    ['_id' => '3']
//);
//
//var_dump($deleteResult->getDeletedCount());

$deleteMany = $empCollection->deleteMany(
    ['age' => '28']
);

var_dump($deleteMany->getDeletedCount());