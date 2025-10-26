<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/load.php');

use Application\Controllers\InspireController;
use Application\View\InspireView;

/*
	* Handle default page load
	* Call the DirectoryController index method
	*/
$controller = new InspireController(new InspireView);
$controller->index();