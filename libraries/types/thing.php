<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * The most generic type of item.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Thing
 * @since       13.1
*/
abstract class TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Thing';

	/**
	 * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $additionalType = array('value' => 'additionalType',
		'expectedTypes' => array('URL')
	);

	/**
	 * A short description of the item.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $description = array('value' => 'description',
		'expectedTypes' => array('Text')
	);

	/**
	 * URL of an image of the item.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $image = array('value' => 'image',
		'expectedTypes' => array('URL')
	);

	/**
	 * The name of the item.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $name = array('value' => 'name',
		'expectedTypes' => array('Text')
	);

	/**
	 * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $sameAs = array('value' => 'sameAs',
		'expectedTypes' => array('URL')
	);

	/**
	 * URL of the item.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $url = array('value' => 'url',
		'expectedTypes' => array('URL')
	);

	/**
	 * Return the 'additionalType' Property value
	 *
	 * @return	string
	 */
	public static function pAdditionalType()
	{
		return self::getValue(self::$additionalType);
	}

	/**
	 * Return the 'description' Property value
	 *
	 * @return	string
	 */
	public static function pDescription()
	{
		return self::getValue(self::$description);
	}

	/**
	 * Return the 'image' Property value
	 *
	 * @return	string
	 */
	public static function pImage()
	{
		return self::getValue(self::$image);
	}

	/**
	 * Return the 'name' Property value
	 *
	 * @return	string
	 */
	public static function pName()
	{
		return self::getValue(self::$name);
	}

	/**
	 * Return the 'sameAs' Property value
	 *
	 * @return	string
	 */
	public static function pSameAs()
	{
		return self::getValue(self::$sameAs);
	}

	/**
	 * Return the 'url' Property value
	 *
	 * @return	string
	 */
	public static function pUrl()
	{
		return self::getValue(self::$url);
	}
}
