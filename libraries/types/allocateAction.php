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
 * The act of organizing tasks/objects/events by associating resources to it.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/AllocateAction
 * @since       13.1
*/
abstract class TypeAllocateAction extends TypeOrganizeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AllocateAction';

	/**
	 * A goal towards an action is taken. Can be concrete or abstract.
	 * Expected Type: MedicalDevicePurpose, Thing
	 * 
	 * @var	array
	 */
	protected static $purpose = array('value' => 'purpose',
		'expectedTypes' => array('MedicalDevicePurpose', 'Thing')
	);

	/**
	 * Return the 'purpose' Property value
	 *
	 * @return	string
	 */
	public static function pPurpose()
	{
		return self::getValue(self::$purpose);
	}
}
