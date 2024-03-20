<?php
header("Content-Type: application/json");

// lettura del file json
$data =file_get_contents('json/dischi.json');


// conversione in array 
$dischi= json_decode($data, true);


if(isset($_GET['discIndex'])){
    echo json_encode($dischi[$_GET['discIndex']]);
}else{
    echo json_encode($dischi);
}


