<?php
require 'vendor/autoload.php'; 

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$documentlist = $empcollection->find(
    ['skill' => 'mongoDB'],
    ['projection' => ['_id' => 0, 'name' => 1]]
);

foreach($documentlist as $doc)
{
    var_dump($doc);
}
?>