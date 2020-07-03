<?php
$result =[];
$result['info'] = array(
	'last_check' 	=> date("Y-m-d "),
); 

$getData = json_decode(file_get_contents("https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json"), true);

$data = [];
foreach ($getData['features'] as $key) {
	$data[] = $key['attributes'];
}

$result['data'] = $data;
echo json_encode($result, JSON_PRETTY_PRINT);
