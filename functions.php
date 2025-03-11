<?php
$json_text = file_get_contents("./discs.json");
            
// var_dump($json_text);

$discs = json_decode($json_text,true);

// var_dump($discs);
?>