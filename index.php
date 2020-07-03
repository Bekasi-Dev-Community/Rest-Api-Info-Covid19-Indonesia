<?php
header('Content-Type: application/json');
if (isset($_GET['_act'])) {
	switch (trim($_GET['_act'])) {
			case 'sulsel':
				require 'sulsel.php';
				break;

			case 'indonesia':
				require 'indonesia.php';
				break;

			case 'world':
				require 'world.php';
				break;

			case 'kasus':
				require 'kasus.php';
				break;	

			case 'who_news':
				require 'who-news.php';
				break;	

			case 'rs_rujukan':
				// require 'rs-rujukan.php';
				break;

			case 'hari':
				require 'hari.php';
				break;	
			default:
				require 'global.php';
				break;
	}	
} else {
	require 'global.php';
}