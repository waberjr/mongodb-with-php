<?php

require '../vendor/autoload.php';

$client = new \MongoDB\Client();
$companyDb = $client->companydb;
$empCollection = $companyDb->empCollection;

//$document = $empCollection->findOne(['_id' => '1']);
//var_dump($document);

$document = $empCollection->find();
foreach ($document as $doc) {
    var_dump($doc);
}
