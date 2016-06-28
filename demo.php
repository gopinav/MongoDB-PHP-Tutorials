<?php
require 'vendor/autoload.php'; 

$client = new MongoDB\Client;
$companydb = $client->companydb;
$result1 = $companydb->createCollection('empcollection');
var_dump($result1);

/*
Create and list collections

$result2 = $companydb->createCollection('newcollection');
var_dump($result2);

foreach($companydb->listCollections() as $collection)
{
    var_dump($collection);
}

Create and list DBs
$newdb = $client->newdb;
$result3 = $newdb->createCollection('mycollection');
var_dump($result3);

foreach($client->listDatabases() as $db)
{
    var_dump($db);
}

Drop DB 

$result4 = $client->dropDatabase('newdb');
var_dump($result4);
*/
?>