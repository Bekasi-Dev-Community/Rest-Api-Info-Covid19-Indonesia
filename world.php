<?php
$result =[];
$result['info'] = array(
	'last_check' 	=> date("Y-m-d h:i:s")
); 

$getData = json_decode(file_get_contents("https://api.kawalcorona.com/"), true);

$data = [];
foreach ($getData as $key) {
	$data[] = $key['attributes'];
}

$result['data'] = $data;
echo json_encode($result, JSON_PRETTY_PRINT);
