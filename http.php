<?php
class Http
{
	public function __construct()
	{
		
	}

	public function http($url)
	{
		// Initialize
		$curl = curl_init();

		// Setup the target
		curl_setopt ($curl, CURLOPT_URL, $url);
		curl_setopt ($curl, CURLOPT_HEADER, 0);

		// Return in string
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

		// Timeout
		curl_setopt($curl, CURLOPT_TIMEOUT, 600);

		// Webbot name
		curl_setopt($curl, CURLOPT_USERAGENT, 'Spider4Schema');

		// Minimize logs
		curl_setopt($curl, CURLOPT_VERBOSE, FALSE);

		// Limit redirections to four
		curl_setopt($curl, CURLOPT_MAXREDIRS, 4);

		// Follow redirects
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
		 
		# Create return array
		$response['file']	= curl_exec($curl);
		$response['status']	= curl_getinfo($curl);
		$response['error']	= curl_error($curl);

		// Execute the request
		curl_exec($curl);

		// Close the handler
		curl_close($curl);
		
		return $response;
	}
}