<?php
/**
 * @copyright  Copyright (C) 2014. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
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