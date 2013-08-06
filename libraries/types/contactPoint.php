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
 * A contact point—for example, a Customer Complaints department.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ContactPoint
 * @since       13.1
*/
abstract class TypeContactPoint extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ContactPoint';

	/**
	 * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $contactType = array('value' => 'contactType',
		'expectedTypes' => array('Text')
	);

	/**
	 * Email address.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $email = array('value' => 'email',
		'expectedTypes' => array('Text')
	);

	/**
	 * The fax number.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $faxNumber = array('value' => 'faxNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The telephone number.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $telephone = array('value' => 'telephone',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'contactType' Property value
	 *
	 * @return	string
	 */
	public static function pContactType()
	{
		return self::getValue(self::$contactType);
	}

	/**
	 * Return the 'email' Property value
	 *
	 * @return	string
	 */
	public static function pEmail()
	{
		return self::getValue(self::$email);
	}

	/**
	 * Return the 'faxNumber' Property value
	 *
	 * @return	string
	 */
	public static function pFaxNumber()
	{
		return self::getValue(self::$faxNumber);
	}

	/**
	 * Return the 'telephone' Property value
	 *
	 * @return	string
	 */
	public static function pTelephone()
	{
		return self::getValue(self::$telephone);
	}
}
