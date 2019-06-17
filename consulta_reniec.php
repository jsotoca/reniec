<?php
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  
$dni = $_POST['dni'];
$response = file_get_contents("https://api.reniec.cloud/dni/".$dni, false, stream_context_create($arrContextOptions));

echo $response;
?>