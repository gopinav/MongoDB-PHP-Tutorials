<?php
require 'vendor/autoload.php'; 

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$updateResult = $empcollection->updateOne(
    ['name' => 'Andrew'],
    ['$set' => ['age' => '29']]
);
printf("Matched %d documents \n", $updateResult->getMatchedCount());
printf("Modified %d documents \n", $updateResult->getModifiedCount());

/*
$updateResult = $empcollection->updateMany(
    [],
    ['$set' => ['age' => '28']]
);
printf("Matched %d documents \n", $updateResult->getMatchedCount());
printf("Modified %d documents \n", $updateResult->getModifiedCount());
*/

/*
$replaceResult = $empcollection->replaceOne(
    ['_id' => '4'],
    ['_id' => '4', 'favColor' => 'blue']
);

printf("Matched %d documents \n", $replaceResult->getMatchedCount());
printf("Modified %d documents \n", $replaceResult->getModifiedCount());
*/

?>