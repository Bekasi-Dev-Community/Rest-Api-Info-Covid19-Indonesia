<?php
$result =[];
$result['info'] = array(
	'last_check' 	=> date("Y-m-d h:i:s")
); 

$get 	= file_get_contents("https://www.who.int/rss-feeds/news-english.xml");
$getXml = simplexml_load_string($get);
$data 	= [];

foreach ($getXml->channel->item as $key) {
	$data[] = array(
		'title'			=> $key->title,
		'link'			=> $key->link,
		'description'	=> $key->description,
		'publish_date'	=> $key->pubDate
	);
}

$result['data'] = $data;

echo json_encode($result , JSON_PRETTY_PRINT);