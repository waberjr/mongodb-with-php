<?php

require '../vendor/autoload.php';

$client = new \MongoDB\Client();
$companyDb = $client->companydb;
$empCollection = $companyDb->empCollection;

$documentList = $empCollection->find(
    [],
    [
        'limit' => 2,
        'skip' => 1,
        'sort' => ['age' => -1]
    ]
);

foreach ($documentList as $doc) {
    var_dump($doc);
}