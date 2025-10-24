<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/load.php');
header('Content-Type: application/json; charset=UTF-8');

use Application\Controllers\DirectoryController;
use Application\View\DirectoryView;

/*
	* Handle search requests
	* Call the DirectoryController search method
	*/
$controller = new DirectoryController(new DirectoryView);
$controller->search();