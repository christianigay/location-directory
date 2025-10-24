<?php
/*
 * Application entry point
 * Load configuration constants
 * Set error display based on environment
 * Autoload classes using Composer
 */
require_once(__DIR__ . '/config/constant.php');
ini_set('display_errors', ENVIRONMENT == 'development');
require_once(__DIR__ . '/vendor/autoload.php');
