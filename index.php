<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/load.php');

use Application\Controllers\DirectoryController;
use Application\View\DirectoryView;

/*
	* Handle default page load
	* Call the DirectoryController index method
	*/
$controller = new DirectoryController(new DirectoryView);
$controller->index();