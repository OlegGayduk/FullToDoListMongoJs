<?php

require "../vendor/autoload.php";

require_once("db.php");

if(isset($_POST['id'])) {
    
	$id = htmlspecialchars($_POST['id']);

	if($id != "") {

        $res = $collection->updateOne(['id' => (int)$id],['$set' => ['done' => true]]);

        if($res != false && $res->getMatchedCount() > 0 && $res->getModifiedCount() > 0) {
            echo 1;
        } else {
            echo 0;
        }
    } else {
    	echo 0;
    }
} else {
	echo 0;
}

?>