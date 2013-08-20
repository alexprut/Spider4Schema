<?php
/**
 * The anatomical location at which two or more bones make contact.
 *
 * @see    http://schema.org/Joint
 * @since  1.0
*/
abstract class TypeJoint extends TypeAnatomicalStructure
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Joint';

	/**
	 * The biomechanical properties of the bone.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $biomechnicalClass = array('value' => 'biomechnicalClass',
		'expectedTypes' => array('Text')
	);

	/**
	 * The degree of mobility the joint allows.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $functionalClass = array('value' => 'functionalClass',
		'expectedTypes' => array('Text')
	);

	/**
	 * The name given to how bone physically connects to each other.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $structuralClass = array('value' => 'structuralClass',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'biomechnicalClass' Property value
	 *
	 * @return	string
	 */
	public static function pBiomechnicalClass()
	{
		return self::getValue(self::$biomechnicalClass);
	}

	/**
	 * Return the 'functionalClass' Property value
	 *
	 * @return	string
	 */
	public static function pFunctionalClass()
	{
		return self::getValue(self::$functionalClass);
	}

	/**
	 * Return the 'structuralClass' Property value
	 *
	 * @return	string
	 */
	public static function pStructuralClass()
	{
		return self::getValue(self::$structuralClass);
	}
}
