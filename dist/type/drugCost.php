<?php
/**
 * The cost per unit of a medical drug. Note that this type is not meant to represent the price in an offer of a drug for sale; see the Offer type for that. This type will typically be used to tag wholesale or average retail cost of a drug, or maximum reimbursable cost. Costs of medical drugs vary widely depending on how and where they are paid for, so while this type captures some of the variables, costs should be used with caution by consumers of this schema's markup.
 *
 * @see    http://schema.org/DrugCost
*/
abstract class TypeDrugCost extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrugCost';

	/**
	 * The location in which the status applies.
	 * Expected Type: AdministrativeArea
	 * 
	 * @var	array
	 */
	protected static $applicableLocation = array('value' => 'applicableLocation',
		'expectedTypes' => array('AdministrativeArea')
	);

	/**
	 * The category of cost, such as wholesale, retail, reimbursement cap, etc.
	 * Expected Type: DrugCostCategory
	 * 
	 * @var	array
	 */
	protected static $costCategory = array('value' => 'costCategory',
		'expectedTypes' => array('DrugCostCategory')
	);

	/**
	 * The currency (in 3-letter ISO 4217 format) of the drug cost.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $costCurrency = array('value' => 'costCurrency',
		'expectedTypes' => array('Text')
	);

	/**
	 * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $costOrigin = array('value' => 'costOrigin',
		'expectedTypes' => array('Text')
	);

	/**
	 * The cost per unit of the drug.
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $costPerUnit = array('value' => 'costPerUnit',
		'expectedTypes' => array('Text', 'Number')
	);

	/**
	 * The unit in which the drug is measured, e.g. '5 mg tablet'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $drugUnit = array('value' => 'drugUnit',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'applicableLocation' Property value
	 *
	 * @return	string
	 */
	public static function pApplicableLocation()
	{
		return self::getValue(self::$applicableLocation);
	}

	/**
	 * Return the 'costCategory' Property value
	 *
	 * @return	string
	 */
	public static function pCostCategory()
	{
		return self::getValue(self::$costCategory);
	}

	/**
	 * Return the 'costCurrency' Property value
	 *
	 * @return	string
	 */
	public static function pCostCurrency()
	{
		return self::getValue(self::$costCurrency);
	}

	/**
	 * Return the 'costOrigin' Property value
	 *
	 * @return	string
	 */
	public static function pCostOrigin()
	{
		return self::getValue(self::$costOrigin);
	}

	/**
	 * Return the 'costPerUnit' Property value
	 *
	 * @return	string
	 */
	public static function pCostPerUnit()
	{
		return self::getValue(self::$costPerUnit);
	}

	/**
	 * Return the 'drugUnit' Property value
	 *
	 * @return	string
	 */
	public static function pDrugUnit()
	{
		return self::getValue(self::$drugUnit);
	}
}
