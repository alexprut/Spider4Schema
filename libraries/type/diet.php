<?php
/**
 * A strategy of regulating the intake of food to achieve or maintain a specific health-related goal.
 *
 * @see    http://schema.org/Diet
 * @since  1.0
*/
abstract class TypeDiet extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Diet';

	/**
	 * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $dietFeatures = array('value' => 'dietFeatures',
		'expectedTypes' => array('Text')
	);

	/**
	 * People or organizations that endorse the plan.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $endorsers = array('value' => 'endorsers',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * Medical expert advice related to the plan.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $expertConsiderations = array('value' => 'expertConsiderations',
		'expectedTypes' => array('Text')
	);

	/**
	 * Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $overview = array('value' => 'overview',
		'expectedTypes' => array('Text')
	);

	/**
	 * Specific physiologic benefits associated to the plan.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $physiologicalBenefits = array('value' => 'physiologicalBenefits',
		'expectedTypes' => array('Text')
	);

	/**
	 * Proprietary name given to the diet plan, typically by its originator or creator.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $proprietaryName = array('value' => 'proprietaryName',
		'expectedTypes' => array('Text')
	);

	/**
	 * Specific physiologic risks associated to the plan.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $risks = array('value' => 'risks',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'dietFeatures' Property value
	 *
	 * @return	string
	 */
	public static function pDietFeatures()
	{
		return self::getValue(self::$dietFeatures);
	}

	/**
	 * Return the 'endorsers' Property value
	 *
	 * @return	string
	 */
	public static function pEndorsers()
	{
		return self::getValue(self::$endorsers);
	}

	/**
	 * Return the 'expertConsiderations' Property value
	 *
	 * @return	string
	 */
	public static function pExpertConsiderations()
	{
		return self::getValue(self::$expertConsiderations);
	}

	/**
	 * Return the 'overview' Property value
	 *
	 * @return	string
	 */
	public static function pOverview()
	{
		return self::getValue(self::$overview);
	}

	/**
	 * Return the 'physiologicalBenefits' Property value
	 *
	 * @return	string
	 */
	public static function pPhysiologicalBenefits()
	{
		return self::getValue(self::$physiologicalBenefits);
	}

	/**
	 * Return the 'proprietaryName' Property value
	 *
	 * @return	string
	 */
	public static function pProprietaryName()
	{
		return self::getValue(self::$proprietaryName);
	}

	/**
	 * Return the 'risks' Property value
	 *
	 * @return	string
	 */
	public static function pRisks()
	{
		return self::getValue(self::$risks);
	}
}
