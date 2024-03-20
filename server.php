<?php

// lettura del file json
$data =file_get_contents('json/dischi.json');


// conversione in array 
$dischi= json_decode($data, true);


header("Content-Type: application/json");

echo json_encode($dischi);
