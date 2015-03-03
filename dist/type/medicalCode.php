<?php
/**
 * A code for a medical entity.
 *
 * @see    http://schema.org/MedicalCode
*/
abstract class TypeMedicalCode extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalCode';

	/**
	 * The actual code.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $codeValue = array('value' => 'codeValue',
		'expectedTypes' => array('Text')
	);

	/**
	 * The coding system, e.g. 'ICD-10'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $codingSystem = array('value' => 'codingSystem',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'codeValue' Property value
	 *
	 * @return	string
	 */
	public static function pCodeValue()
	{
		return self::getValue(self::$codeValue);
	}

	/**
	 * Return the 'codingSystem' Property value
	 *
	 * @return	string
	 */
	public static function pCodingSystem()
	{
		return self::getValue(self::$codingSystem);
	}
}
