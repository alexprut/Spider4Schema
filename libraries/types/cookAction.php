<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * The act of producing/preparing food.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/CookAction
 * @since       13.1
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
