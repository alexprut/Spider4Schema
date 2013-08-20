<?php
/**
 * A recipe.
 *
 * @see    http://schema.org/Recipe
 * @since  1.0
*/
abstract class TypeRecipe extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Recipe';

	/**
	 * The method of cooking, such as Frying, Steaming, ...
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $cookingMethod = array('value' => 'cookingMethod',
		'expectedTypes' => array('Text')
	);

	/**
	 * The time it takes to actually cook the dish, in ISO 8601 duration format.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $cookTime = array('value' => 'cookTime',
		'expectedTypes' => array('Duration')
	);

	/**
	 * An ingredient used in the recipe.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $ingredients = array('value' => 'ingredients',
		'expectedTypes' => array('Text')
	);

	/**
	 * Nutrition information about the recipe.
	 * Expected Type: NutritionInformation
	 * 
	 * @var	array
	 */
	protected static $nutrition = array('value' => 'nutrition',
		'expectedTypes' => array('NutritionInformation')
	);

	/**
	 * The length of time it takes to prepare the recipe, in ISO 8601 duration format.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $prepTime = array('value' => 'prepTime',
		'expectedTypes' => array('Duration')
	);

	/**
	 * The category of the recipe—for example, appetizer, entree, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $recipeCategory = array('value' => 'recipeCategory',
		'expectedTypes' => array('Text')
	);

	/**
	 * The cuisine of the recipe (for example, French or Ethopian).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $recipeCuisine = array('value' => 'recipeCuisine',
		'expectedTypes' => array('Text')
	);

	/**
	 * The steps to make the dish.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $recipeInstructions = array('value' => 'recipeInstructions',
		'expectedTypes' => array('Text')
	);

	/**
	 * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $recipeYield = array('value' => 'recipeYield',
		'expectedTypes' => array('Text')
	);

	/**
	 * The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $totalTime = array('value' => 'totalTime',
		'expectedTypes' => array('Duration')
	);

	/**
	 * Return the 'cookingMethod' Property value
	 *
	 * @return	string
	 */
	public static function pCookingMethod()
	{
		return self::getValue(self::$cookingMethod);
	}

	/**
	 * Return the 'cookTime' Property value
	 *
	 * @return	string
	 */
	public static function pCookTime()
	{
		return self::getValue(self::$cookTime);
	}

	/**
	 * Return the 'ingredients' Property value
	 *
	 * @return	string
	 */
	public static function pIngredients()
	{
		return self::getValue(self::$ingredients);
	}

	/**
	 * Return the 'nutrition' Property value
	 *
	 * @return	string
	 */
	public static function pNutrition()
	{
		return self::getValue(self::$nutrition);
	}

	/**
	 * Return the 'prepTime' Property value
	 *
	 * @return	string
	 */
	public static function pPrepTime()
	{
		return self::getValue(self::$prepTime);
	}

	/**
	 * Return the 'recipeCategory' Property value
	 *
	 * @return	string
	 */
	public static function pRecipeCategory()
	{
		return self::getValue(self::$recipeCategory);
	}

	/**
	 * Return the 'recipeCuisine' Property value
	 *
	 * @return	string
	 */
	public static function pRecipeCuisine()
	{
		return self::getValue(self::$recipeCuisine);
	}

	/**
	 * Return the 'recipeInstructions' Property value
	 *
	 * @return	string
	 */
	public static function pRecipeInstructions()
	{
		return self::getValue(self::$recipeInstructions);
	}

	/**
	 * Return the 'recipeYield' Property value
	 *
	 * @return	string
	 */
	public static function pRecipeYield()
	{
		return self::getValue(self::$recipeYield);
	}

	/**
	 * Return the 'totalTime' Property value
	 *
	 * @return	string
	 */
	public static function pTotalTime()
	{
		return self::getValue(self::$totalTime);
	}
}
