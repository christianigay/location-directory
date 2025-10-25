<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/load.php');

use Application\Controllers\ConferenceController;
use Application\View\ConferenceView;

/*
	* Handle default page load
	* Call the DirectoryController index method
	*/
$controller = new ConferenceController(new ConferenceView);
$controller->index();