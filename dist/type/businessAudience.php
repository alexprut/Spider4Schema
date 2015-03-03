<?php
/**
 * A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
 *
 * @see    http://schema.org/BusinessAudience
*/
abstract class TypeBusinessAudience extends TypeAudience
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BusinessAudience';

	/**
	 * The size of business by number of employees.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $numberOfEmployees = array('value' => 'numberOfEmployees',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * The size of the business in annual revenue.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $yearlyRevenue = array('value' => 'yearlyRevenue',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * The age of the business.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $yearsInOperation = array('value' => 'yearsInOperation',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * Return the 'numberOfEmployees' Property value
	 *
	 * @return	string
	 */
	public static function pNumberOfEmployees()
	{
		return self::getValue(self::$numberOfEmployees);
	}

	/**
	 * Return the 'yearlyRevenue' Property value
	 *
	 * @return	string
	 */
	public static function pYearlyRevenue()
	{
		return self::getValue(self::$yearlyRevenue);
	}

	/**
	 * Return the 'yearsInOperation' Property value
	 *
	 * @return	string
	 */
	public static function pYearsInOperation()
	{
		return self::getValue(self::$yearsInOperation);
	}
}
