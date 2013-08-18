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
 * An anatomical system is a group of anatomical structures that work together to perform a certain task. Anatomical systems, such as organ systems, are one organizing principle of anatomy, and can includes circulatory, digestive, endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive, respiratory, skeletal, urinary, vestibular, and other systems.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/AnatomicalSystem
 * @since       13.1
*/
abstract class TypeAnatomicalSystem extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AnatomicalSystem';

	/**
	 * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $associatedPathophysiology = array('value' => 'associatedPathophysiology',
		'expectedTypes' => array('Text')
	);

	/**
	 * The underlying anatomical structures, such as organs, that comprise the anatomical system.
	 * Expected Type: AnatomicalStructure, AnatomicalSystem
	 * 
	 * @var	array
	 */
	protected static $comprisedOf = array('value' => 'comprisedOf',
		'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem')
	);

	/**
	 * A medical condition associated with this anatomy.
	 * Expected Type: MedicalCondition
	 * 
	 * @var	array
	 */
	protected static $relatedCondition = array('value' => 'relatedCondition',
		'expectedTypes' => array('MedicalCondition')
	);

	/**
	 * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
	 * Expected Type: AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $relatedStructure = array('value' => 'relatedStructure',
		'expectedTypes' => array('AnatomicalStructure')
	);

	/**
	 * A medical therapy related to this anatomy.
	 * Expected Type: MedicalTherapy
	 * 
	 * @var	array
	 */
	protected static $relatedTherapy = array('value' => 'relatedTherapy',
		'expectedTypes' => array('MedicalTherapy')
	);

	/**
	 * Return the 'associatedPathophysiology' Property value
	 *
	 * @return	string
	 */
	public static function pAssociatedPathophysiology()
	{
		return self::getValue(self::$associatedPathophysiology);
	}

	/**
	 * Return the 'comprisedOf' Property value
	 *
	 * @return	string
	 */
	public static function pComprisedOf()
	{
		return self::getValue(self::$comprisedOf);
	}

	/**
	 * Return the 'relatedCondition' Property value
	 *
	 * @return	string
	 */
	public static function pRelatedCondition()
	{
		return self::getValue(self::$relatedCondition);
	}

	/**
	 * Return the 'relatedStructure' Property value
	 *
	 * @return	string
	 */
	public static function pRelatedStructure()
	{
		return self::getValue(self::$relatedStructure);
	}

	/**
	 * Return the 'relatedTherapy' Property value
	 *
	 * @return	string
	 */
	public static function pRelatedTherapy()
	{
		return self::getValue(self::$relatedTherapy);
	}
}
