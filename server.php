<?php
// var_dump($_POST);

$json_text = file_get_contents("./discs.json");

$discs = json_decode($json_text,true);

$discs[]= $_POST;

// var_dump($discs);

$json_text_encoded = json_encode($discs);

file_put_contents("./discs.json",$json_text_encoded);

header("Location: ./index.php");
?>