<?php
/**
 * The act of producing/preparing food.
 *
 * @see    http://schema.org/CookAction
*/
abstract class TypeCookAction extends TypeCreateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CookAction';

	/**
	 * A sub property of location. The specific food establishment where the action occurreed.
	 * Expected Type: FoodEstablishment, Place
	 * 
	 * @var	array
	 */
	protected static $foodEstablishment = array('value' => 'foodEstablishment',
		'expectedTypes' => array('FoodEstablishment', 'Place')
	);

	/**
	 * A sub property of location. The specific food event where the action occurred.
	 * Expected Type: FoodEvent
	 * 
	 * @var	array
	 */
	protected static $foodEvent = array('value' => 'foodEvent',
		'expectedTypes' => array('FoodEvent')
	);

	/**
	 * A sub property of instrument. The recipe/instructions used to perform the action.
	 * Expected Type: Recipe
	 * 
	 * @var	array
	 */
	protected static $recipe = array('value' => 'recipe',
		'expectedTypes' => array('Recipe')
	);

	/**
	 * Return the 'foodEstablishment' Property value
	 *
	 * @return	string
	 */
	public static function pFoodEstablishment()
	{
		return self::getValue(self::$foodEstablishment);
	}

	/**
	 * Return the 'foodEvent' Property value
	 *
	 * @return	string
	 */
	public static function pFoodEvent()
	{
		return self::getValue(self::$foodEvent);
	}

	/**
	 * Return the 'recipe' Property value
	 *
	 * @return	string
	 */
	public static function pRecipe()
	{
		return self::getValue(self::$recipe);
	}
}
