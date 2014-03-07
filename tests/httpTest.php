<?php
/**
 * @copyright  Copyright (C) 2014. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

include_once 'http.php';

/**
 *
 */
class HttpTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Tested class handler
	 * 
	 * @var object
	 */
	protected $handle;

	/**
	 * Test setup
	 * 
	 * @return	void
	 */
	public function setUp()
	{
		$this->handle = new Http;
	}

	/**
	 * Test basic asserts
	 * 
	 * @return	void
	 */
	public function testAsserts()
	{
		$url = 'https://schema.org';

		$responce = $this->handle->httpRequest($url);

		$this->assertArrayHasKey('status', $responce);
		$this->assertArrayHasKey('error', $responce);
		$this->assertArrayHasKey('file', $responce);
	}
}
