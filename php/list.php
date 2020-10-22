<?php

require "../vendor/autoload.php";

require_once("db.php");

$deals = $collection->find();

$i = 0;

foreach ($deals as $doc) {
    $arr[$i++] = $doc;
}

echo json_encode($arr);

?>