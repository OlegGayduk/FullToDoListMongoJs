<?php

require "../vendor/autoload.php";

require_once("db.php");

if(isset($_POST['add_text'])) {
    
	$text = htmlspecialchars($_POST['add_text']);

	if($text != "") {

        $lastDeal = $collection->find([],['limit' => 1,'sort' => ['id' => -1]]);

        foreach ($lastDeal as $deal) {
            $id = $deal['id'];
        }

        $arr = ['id' => ($id + 1),'text' => $text,'done' => false];

        $res = $collection->insertOne($arr);

        if($res != false) {
            echo json_encode($arr);
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