<?php
require '../vendor/autoload.php';

//instantiating the MongoDB class
$client = new \MongoDB\Client();

//Creating DB
//$companyDb = $client->newdb;


//Creating a new collection
//$result1 = $companyDb->createCollection('myCollection');
//
//var_dump($result1);


//Listing all collections
//foreach ($companyDb->listCollections() as $collection){
//    var_dump($collection);
//}


//Deleting the collection
//$result2 = $companyDb->dropCollection('myCollection');
//var_dump($result2);


//Creating new collection
//$result3 = $companyDb->createCollection('newCollection');
//var_dump($result3);


//Listing all databases
foreach ($client->listDatabases() as $db) {
    var_dump($db);
}

//Droping the database
//$result4 = $client->dropDatabase('newdb');
//var_dump($result4);