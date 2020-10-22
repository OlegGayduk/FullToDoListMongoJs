<?php

require "../vendor/autoload.php";

require_once("db.php");

if(isset($_POST['id'])) {
    
	$id = htmlspecialchars($_POST['id']);

	if($id != "") {

        $res = $collection->deleteOne(['id' => (int)$id]);

        if($res != false && $res->getDeletedCount() > 0) {
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