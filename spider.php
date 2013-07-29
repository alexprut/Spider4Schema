<?php
include_once 'http.php';
include_once 'parser.php';

// Initialize the Spider
$http = new Http;

// Retrieve the HTML to retrieve all available Types
//$html = $http->http('https://schema.org/docs/full.html');

//$types = parseTypes($html['file']);

// Retrieve the Type HTML
$type = $http->http('http://schema.org/DateTime');

$type = parseType($type['file'], 'DataTime');

var_dump($asd);