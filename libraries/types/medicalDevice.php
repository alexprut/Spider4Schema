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
 * Any object used in a medical capacity, such as to diagnose or treat a patient.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalDevice
 * @since       13.1
*/
abstract class TypeMedicalDevice extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalDevice';

	/**
	 * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
	 * Expected Type: MedicalEntity
	 * 
	 * @var	array
	 */
	protected static $adverseOutcome = array('value' => 'adverseOutcome',
		'expectedTypes' => array('MedicalEntity')
	);

	/**
	 * A contraindication for this therapy.
	 * Expected Type: MedicalContraindication
	 * 
	 * @var	array
	 */
	protected static $contraindication = array('value' => 'contraindication',
		'expectedTypes' => array('MedicalContraindication')
	);

	/**
	 * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
	 * Expected Type: MedicalIndication
	 * 
	 * @var	array
	 */
	protected static $indication = array('value' => 'indication',
		'expectedTypes' => array('MedicalIndication')
	);

	/**
	 * A description of the postoperative procedures, care, and/or followups for this device.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $postOp = array('value' => 'postOp',
		'expectedTypes' => array('Text')
	);

	/**
	 * A description of the workup, testing, and other preparations required before implanting this device.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $preOp = array('value' => 'preOp',
		'expectedTypes' => array('Text')
	);

	/**
	 * A description of the procedure involved in setting up, using, and/or installing the device.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $procedure = array('value' => 'procedure',
		'expectedTypes' => array('Text')
	);

	/**
	 * The purpose or purposes of this device, for example whether it is intended for diagnostic or therapeutic use.
	 * Expected Type: MedicalDevicePurpose
	 * 
	 * @var	array
	 */
	protected static $purpose = array('value' => 'purpose',
		'expectedTypes' => array('MedicalDevicePurpose')
	);

	/**
	 * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
	 * Expected Type: MedicalEntity
	 * 
	 * @var	array
	 */
	protected static $seriousAdverseOutcome = array('value' => 'seriousAdverseOutcome',
		'expectedTypes' => array('MedicalEntity')
	);

	/**
	 * Return the 'adverseOutcome' Property value
	 *
	 * @return	string
	 */
	public static function pAdverseOutcome()
	{
		return self::getValue(self::$adverseOutcome);
	}

	/**
	 * Return the 'contraindication' Property value
	 *
	 * @return	string
	 */
	public static function pContraindication()
	{
		return self::getValue(self::$contraindication);
	}

	/**
	 * Return the 'indication' Property value
	 *
	 * @return	string
	 */
	public static function pIndication()
	{
		return self::getValue(self::$indication);
	}

	/**
	 * Return the 'postOp' Property value
	 *
	 * @return	string
	 */
	public static function pPostOp()
	{
		return self::getValue(self::$postOp);
	}

	/**
	 * Return the 'preOp' Property value
	 *
	 * @return	string
	 */
	public static function pPreOp()
	{
		return self::getValue(self::$preOp);
	}

	/**
	 * Return the 'procedure' Property value
	 *
	 * @return	string
	 */
	public static function pProcedure()
	{
		return self::getValue(self::$procedure);
	}

	/**
	 * Return the 'purpose' Property value
	 *
	 * @return	string
	 */
	public static function pPurpose()
	{
		return self::getValue(self::$purpose);
	}

	/**
	 * Return the 'seriousAdverseOutcome' Property value
	 *
	 * @return	string
	 */
	public static function pSeriousAdverseOutcome()
	{
		return self::getValue(self::$seriousAdverseOutcome);
	}
}
