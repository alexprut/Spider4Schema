<?php
/**
 * A specific strength in which a medical drug is available in a specific country.
 *
 * @see    http://schema.org/DrugStrength
 * @since  1.0
*/
abstract class TypeDrugStrength extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrugStrength';

	/**
	 * An active ingredient, typically chemical compounds and/or biologic substances.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $activeIngredient = array('value' => 'activeIngredient',
		'expectedTypes' => array('Text')
	);

	/**
	 * The location in which the strength is available.
	 * Expected Type: AdministrativeArea
	 * 
	 * @var	array
	 */
	protected static $availableIn = array('value' => 'availableIn',
		'expectedTypes' => array('AdministrativeArea')
	);

	/**
	 * The units of an active ingredient's strength, e.g. mg.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $strengthUnit = array('value' => 'strengthUnit',
		'expectedTypes' => array('Text')
	);

	/**
	 * The value of an active ingredient's strength, e.g. 325.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $strengthValue = array('value' => 'strengthValue',
		'expectedTypes' => array('Number')
	);

	/**
	 * Return the 'activeIngredient' Property value
	 *
	 * @return	string
	 */
	public static function pActiveIngredient()
	{
		return self::getValue(self::$activeIngredient);
	}

	/**
	 * Return the 'availableIn' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableIn()
	{
		return self::getValue(self::$availableIn);
	}

	/**
	 * Return the 'strengthUnit' Property value
	 *
	 * @return	string
	 */
	public static function pStrengthUnit()
	{
		return self::getValue(self::$strengthUnit);
	}

	/**
	 * Return the 'strengthValue' Property value
	 *
	 * @return	string
	 */
	public static function pStrengthValue()
	{
		return self::getValue(self::$strengthValue);
	}
}
