<?php
/**
 * Nutritional information about the recipe.
 *
 * @see    http://schema.org/NutritionInformation
*/
abstract class TypeNutritionInformation extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/NutritionInformation';

	/**
	 * The number of calories.
	 * Expected Type: Energy
	 * 
	 * @var	array
	 */
	protected static $calories = array('value' => 'calories',
		'expectedTypes' => array('Energy')
	);

	/**
	 * The number of grams of carbohydrates.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $carbohydrateContent = array('value' => 'carbohydrateContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * The number of milligrams of cholesterol.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $cholesterolContent = array('value' => 'cholesterolContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * The number of grams of fat.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $fatContent = array('value' => 'fatContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * The number of grams of fiber.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $fiberContent = array('value' => 'fiberContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * The number of grams of protein.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $proteinContent = array('value' => 'proteinContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * The number of grams of saturated fat.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $saturatedFatContent = array('value' => 'saturatedFatContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * The serving size, in terms of the number of volume or mass.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $servingSize = array('value' => 'servingSize',
		'expectedTypes' => array('Text')
	);

	/**
	 * The number of milligrams of sodium.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $sodiumContent = array('value' => 'sodiumContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * The number of grams of sugar.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $sugarContent = array('value' => 'sugarContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * The number of grams of trans fat.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $transFatContent = array('value' => 'transFatContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * The number of grams of unsaturated fat.
	 * Expected Type: Mass
	 * 
	 * @var	array
	 */
	protected static $unsaturatedFatContent = array('value' => 'unsaturatedFatContent',
		'expectedTypes' => array('Mass')
	);

	/**
	 * Return the 'calories' Property value
	 *
	 * @return	string
	 */
	public static function pCalories()
	{
		return self::getValue(self::$calories);
	}

	/**
	 * Return the 'carbohydrateContent' Property value
	 *
	 * @return	string
	 */
	public static function pCarbohydrateContent()
	{
		return self::getValue(self::$carbohydrateContent);
	}

	/**
	 * Return the 'cholesterolContent' Property value
	 *
	 * @return	string
	 */
	public static function pCholesterolContent()
	{
		return self::getValue(self::$cholesterolContent);
	}

	/**
	 * Return the 'fatContent' Property value
	 *
	 * @return	string
	 */
	public static function pFatContent()
	{
		return self::getValue(self::$fatContent);
	}

	/**
	 * Return the 'fiberContent' Property value
	 *
	 * @return	string
	 */
	public static function pFiberContent()
	{
		return self::getValue(self::$fiberContent);
	}

	/**
	 * Return the 'proteinContent' Property value
	 *
	 * @return	string
	 */
	public static function pProteinContent()
	{
		return self::getValue(self::$proteinContent);
	}

	/**
	 * Return the 'saturatedFatContent' Property value
	 *
	 * @return	string
	 */
	public static function pSaturatedFatContent()
	{
		return self::getValue(self::$saturatedFatContent);
	}

	/**
	 * Return the 'servingSize' Property value
	 *
	 * @return	string
	 */
	public static function pServingSize()
	{
		return self::getValue(self::$servingSize);
	}

	/**
	 * Return the 'sodiumContent' Property value
	 *
	 * @return	string
	 */
	public static function pSodiumContent()
	{
		return self::getValue(self::$sodiumContent);
	}

	/**
	 * Return the 'sugarContent' Property value
	 *
	 * @return	string
	 */
	public static function pSugarContent()
	{
		return self::getValue(self::$sugarContent);
	}

	/**
	 * Return the 'transFatContent' Property value
	 *
	 * @return	string
	 */
	public static function pTransFatContent()
	{
		return self::getValue(self::$transFatContent);
	}

	/**
	 * Return the 'unsaturatedFatContent' Property value
	 *
	 * @return	string
	 */
	public static function pUnsaturatedFatContent()
	{
		return self::getValue(self::$unsaturatedFatContent);
	}
}
