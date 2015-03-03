<?php
/**
 * @copyright  Copyright (C) 2013 - 2015 P.Alex (Alexandru Pruteanu)
 * @license    Licensed under the MIT License; see LICENSE
 */

/**
 * The Spider4Schema configuration file
 */

define('SPIDER_NAME', 'Spider4Schema');
define('CURL_TIMEOUT', 600);

/*
 * Setup the Debug type, available options:
 * true, false
 */
$debug = true;
if (isset($argv[2]))
{
    switch ($argv[2])
    {
        case 'false':
            $debug = false;
            break;
        case 'verbose':
            $debug = 'verbose';
            break;
        default:
            $debug = true;
            break;
    }
}
define('DEBUG', $debug);

/*
 * The Type of library to create, available options:
 * minified, normal, json
 */
define('CREATE_LIBRARY', (isset($argv[1]) && in_array($argv[1], array('minified', 'normal', 'json'))) ? $argv[1] : 'json');
define('CLASS_PREFIX', 'Type');
