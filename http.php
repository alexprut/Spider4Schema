<?php
/**
 * @copyright  Copyright (C) 2014. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

include_once 'configuration.php';

/**
 * A class to handle and make HTTP requests using the cURL library
 */
class Http
{
	/**
	 * Makes an HTTP request and return the page HTML response
	 * 
	 * @param   string  $url  The url to make HTTP request and retrieve the HTML 
	 * 
	 * @return	string
	 */
	public function httpRequest($url)
	{
		if (DEBUG)
			echo "HTTP request: $url\n";

		// Initialize
		$curl = curl_init();

		// Setup the target
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, 0);

		// Return in string
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		// Timeout
		curl_setopt($curl, CURLOPT_TIMEOUT, CURL_TIMEOUT);

		// Webbot name
		curl_setopt($curl, CURLOPT_USERAGENT, SPIDER_NAME);

		// Minimize logs
		curl_setopt($curl, CURLOPT_VERBOSE, false);

		// Limit redirections to four
		curl_setopt($curl, CURLOPT_MAXREDIRS, 4);

		// Follow redirects
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

		// Create return array
		$response['file']	= curl_exec($curl);
		$response['status']	= curl_getinfo($curl);
		$response['error']	= curl_error($curl);

		// Execute the request
		curl_exec($curl);

		// Close the handler
		curl_close($curl);

		if (DEBUG === 'verbose')
		{
			echo "Retrieved HTTP:\n";
			var_dump($response['status']);
			var_dump($response['error']);
		}

		if ($response['file'] == '')
			die("Error while making the HTTP request: no HTML retrieved.");

		return $response;
	}
}
