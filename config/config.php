<?php
date_default_timezone_set('America/Chicago');

// Set site language
$siteLanguage = "en-US";

// Set error reporting
$state = 'dev'; // switch to 'prd' to disable errors
if($state =='dev'){
	ini_set( "display_errors", "1" );
 	error_reporting( E_ALL & ~E_NOTICE );
}else{
	error_reporting(0);
}

// Import composer autoload
require_once __DIR__.'/../vendor/autoload.php';

// Store sitewide functions
include 'functions.php';
include 'headers.php';

// Site settings, primarily used to break cache
$version = "2.0.1";
