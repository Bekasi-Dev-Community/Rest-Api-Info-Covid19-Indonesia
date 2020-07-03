<?php

$dataId = json_decode(file_get_contents("https://api.kawalcorona.com/indonesia") , 1);
$dataGl = [];

$dataGl['positif'] = json_decode(file_get_contents("https://api.kawalcorona.com/positif") , true)['value'];
$dataGl['sembuh'] = json_decode(file_get_contents("https://api.kawalcorona.com/sembuh") , true)['value'];
$dataGl['meninggal'] = json_decode(file_get_contents("https://api.kawalcorona.com/meninggal") , true)['value'];

$output = [];
$output['info'] = array(
	'last_check' 	=> date("Y-m-d h:i:s"),
); 

$output['data'] = array(
	'indonesia' => array(
		'positif'	=> $dataId[0]['positif'],
		'sembuh'	=> $dataId[0]['sembuh'],
		'meninggal' => $dataId[0]['meninggal']
	),
	'global'	=> $dataGl
);

$output['route'] = array(
	'/v1/indonesia' 	=> 'Data COVID19 Di seluruh Indonesia',
	'/v1/world'			=> 'Data COVID19 Di seluruh Dunia',
	'/v1/kasus'			=> 'Data Kasus COVID19 ( Report Semua KAsus )',
	'/v1/hari'			=> 'Data Kasus COVID19 ( Report Perhari )',
	'/v1/who_news'		=> 'Update Berita Terbaru COVID19 Dari WHO'
);

echo json_encode($output , JSON_PRETTY_PRINT);
