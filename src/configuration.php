<?php
/**
 * @copyright  Copyright (C) 2013 - 2014 P.Alex (Alexandru Pruteanu)
 * @license    Licensed under the MIT License; see LICENSE
 */

/**
 * The Spider4Schema configuration file
 */

define('SPIDER_NAME', 'Spider4Schema');
define('CURL_TIMEOUT', 600);

/*
 * Setup the Debug type, available options:
 * verbose, true, false
 */
define('DEBUG', true);

/*
 * The Type of library to create, available options:
 * minified, normal, json
 */
define('CREATE_LIBRARY', 'json');
define('CLASS_PREFIX', 'Type');