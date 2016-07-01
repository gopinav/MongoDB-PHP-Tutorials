<?php
require 'vendor/autoload.php'; 

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;
$document = $empcollection->findOne(
    ['_id' => '1']
);
var_dump($document);

/*
$documentlist = $empcollection->find(
 // Your condition 
);

foreach($documentlist as $doc)
{
    var_dump($doc);
}

*/
?>