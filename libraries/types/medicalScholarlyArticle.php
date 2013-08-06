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
 * A scholarly article in the medical domain.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalScholarlyArticle
 * @since       13.1
*/
abstract class TypeMedicalScholarlyArticle extends TypeScholarlyArticle
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalScholarlyArticle';

	/**
	 * The type of the medical article, taken from the US NLM MeSH publication type catalog.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $publicationType = array('value' => 'publicationType',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'publicationType' Property value
	 *
	 * @return	string
	 */
	public static function pPublicationType()
	{
		return self::getValue(self::$publicationType);
	}
}
