<?php
/**
 * A Property value specification.
 *
 * @see    http://schema.org/PropertyValueSpecification
*/
abstract class TypePropertyValueSpecification extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PropertyValueSpecification';

	/**
	 * The default value of the input. For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
	 * Expected Type: Text, Thing
	 * 
	 * @var	array
	 */
	protected static $defaultValue = array('value' => 'defaultValue',
		'expectedTypes' => array('Text', 'Thing')
	);

	/**
	 * The upper value of some characteristic or property.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $maxValue = array('value' => 'maxValue',
		'expectedTypes' => array('Number')
	);

	/**
	 * The lower value of some characteristic or property.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $minValue = array('value' => 'minValue',
		'expectedTypes' => array('Number')
	);

	/**
	 * Whether multiple values are allowed for the property. Default is false.
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $multipleValues = array('value' => 'multipleValues',
		'expectedTypes' => array('Boolean')
	);

	/**
	 * Whether or not a property is mutable. Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $readonlyValue = array('value' => 'readonlyValue',
		'expectedTypes' => array('Boolean')
	);

	/**
	 * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $stepValue = array('value' => 'stepValue',
		'expectedTypes' => array('Number')
	);

	/**
	 * Specifies the allowed range for number of characters in a literal value.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $valueMaxLength = array('value' => 'valueMaxLength',
		'expectedTypes' => array('Number')
	);

	/**
	 * Specifies the minimum allowed range for number of characters in a literal value.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $valueMinLength = array('value' => 'valueMinLength',
		'expectedTypes' => array('Number')
	);

	/**
	 * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $valueName = array('value' => 'valueName',
		'expectedTypes' => array('Text')
	);

	/**
	 * Specifies a regular expression for testing literal values according to the HTML spec.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $valuePattern = array('value' => 'valuePattern',
		'expectedTypes' => array('Text')
	);

	/**
	 * Whether the property must be filled in to complete the action. Default is false.
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $valueRequired = array('value' => 'valueRequired',
		'expectedTypes' => array('Boolean')
	);

	/**
	 * Return the 'defaultValue' Property value
	 *
	 * @return	string
	 */
	public static function pDefaultValue()
	{
		return self::getValue(self::$defaultValue);
	}

	/**
	 * Return the 'maxValue' Property value
	 *
	 * @return	string
	 */
	public static function pMaxValue()
	{
		return self::getValue(self::$maxValue);
	}

	/**
	 * Return the 'minValue' Property value
	 *
	 * @return	string
	 */
	public static function pMinValue()
	{
		return self::getValue(self::$minValue);
	}

	/**
	 * Return the 'multipleValues' Property value
	 *
	 * @return	string
	 */
	public static function pMultipleValues()
	{
		return self::getValue(self::$multipleValues);
	}

	/**
	 * Return the 'readonlyValue' Property value
	 *
	 * @return	string
	 */
	public static function pReadonlyValue()
	{
		return self::getValue(self::$readonlyValue);
	}

	/**
	 * Return the 'stepValue' Property value
	 *
	 * @return	string
	 */
	public static function pStepValue()
	{
		return self::getValue(self::$stepValue);
	}

	/**
	 * Return the 'valueMaxLength' Property value
	 *
	 * @return	string
	 */
	public static function pValueMaxLength()
	{
		return self::getValue(self::$valueMaxLength);
	}

	/**
	 * Return the 'valueMinLength' Property value
	 *
	 * @return	string
	 */
	public static function pValueMinLength()
	{
		return self::getValue(self::$valueMinLength);
	}

	/**
	 * Return the 'valueName' Property value
	 *
	 * @return	string
	 */
	public static function pValueName()
	{
		return self::getValue(self::$valueName);
	}

	/**
	 * Return the 'valuePattern' Property value
	 *
	 * @return	string
	 */
	public static function pValuePattern()
	{
		return self::getValue(self::$valuePattern);
	}

	/**
	 * Return the 'valueRequired' Property value
	 *
	 * @return	string
	 */
	public static function pValueRequired()
	{
		return self::getValue(self::$valueRequired);
	}
}
