<?php
/**
 * A predefined value for a product characteristic, e.g. the power cord plug type "US" or the garment sizes "S", "M", "L", and "XL".
 *
 * @see    http://schema.org/QualitativeValue
*/
abstract class TypeQualitativeValue extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/QualitativeValue';

	/**
	 * This ordering relation for qualitative values indicates that the subject is equal to the object.
	 * Expected Type: QualitativeValue
	 * 
	 * @var	array
	 */
	protected static $equal = array('value' => 'equal',
		'expectedTypes' => array('QualitativeValue')
	);

	/**
	 * This ordering relation for qualitative values indicates that the subject is greater than the object.
	 * Expected Type: QualitativeValue
	 * 
	 * @var	array
	 */
	protected static $greater = array('value' => 'greater',
		'expectedTypes' => array('QualitativeValue')
	);

	/**
	 * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
	 * Expected Type: QualitativeValue
	 * 
	 * @var	array
	 */
	protected static $greaterOrEqual = array('value' => 'greaterOrEqual',
		'expectedTypes' => array('QualitativeValue')
	);

	/**
	 * This ordering relation for qualitative values indicates that the subject is lesser than the object.
	 * Expected Type: QualitativeValue
	 * 
	 * @var	array
	 */
	protected static $lesser = array('value' => 'lesser',
		'expectedTypes' => array('QualitativeValue')
	);

	/**
	 * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
	 * Expected Type: QualitativeValue
	 * 
	 * @var	array
	 */
	protected static $lesserOrEqual = array('value' => 'lesserOrEqual',
		'expectedTypes' => array('QualitativeValue')
	);

	/**
	 * This ordering relation for qualitative values indicates that the subject is not equal to the object.
	 * Expected Type: QualitativeValue
	 * 
	 * @var	array
	 */
	protected static $nonEqual = array('value' => 'nonEqual',
		'expectedTypes' => array('QualitativeValue')
	);

	/**
	 * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
	 * Expected Type: StructuredValue, Enumeration
	 * 
	 * @var	array
	 */
	protected static $valueReference = array('value' => 'valueReference',
		'expectedTypes' => array('StructuredValue', 'Enumeration')
	);

	/**
	 * Return the 'equal' Property value
	 *
	 * @return	string
	 */
	public static function pEqual()
	{
		return self::getValue(self::$equal);
	}

	/**
	 * Return the 'greater' Property value
	 *
	 * @return	string
	 */
	public static function pGreater()
	{
		return self::getValue(self::$greater);
	}

	/**
	 * Return the 'greaterOrEqual' Property value
	 *
	 * @return	string
	 */
	public static function pGreaterOrEqual()
	{
		return self::getValue(self::$greaterOrEqual);
	}

	/**
	 * Return the 'lesser' Property value
	 *
	 * @return	string
	 */
	public static function pLesser()
	{
		return self::getValue(self::$lesser);
	}

	/**
	 * Return the 'lesserOrEqual' Property value
	 *
	 * @return	string
	 */
	public static function pLesserOrEqual()
	{
		return self::getValue(self::$lesserOrEqual);
	}

	/**
	 * Return the 'nonEqual' Property value
	 *
	 * @return	string
	 */
	public static function pNonEqual()
	{
		return self::getValue(self::$nonEqual);
	}

	/**
	 * Return the 'valueReference' Property value
	 *
	 * @return	string
	 */
	public static function pValueReference()
	{
		return self::getValue(self::$valueReference);
	}
}
