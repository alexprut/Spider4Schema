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
 * A food-related business.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/FoodEstablishment
 * @since       13.1
*/
abstract class TypeFoodEstablishment extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/FoodEstablishment';

	/**
	 * Either Yes/No, or a URL at which reservations can be made.
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $acceptsReservations = array('value' => 'acceptsReservations',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * Either the actual menu or a URL of the menu.
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $menu = array('value' => 'menu',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * The cuisine of the restaurant.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $servesCuisine = array('value' => 'servesCuisine',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'acceptsReservations' Property value
	 *
	 * @return	string
	 */
	public static function pAcceptsReservations()
	{
		return self::getValue(self::$acceptsReservations);
	}

	/**
	 * Return the 'menu' Property value
	 *
	 * @return	string
	 */
	public static function pMenu()
	{
		return self::getValue(self::$menu);
	}

	/**
	 * Return the 'servesCuisine' Property value
	 *
	 * @return	string
	 */
	public static function pServesCuisine()
	{
		return self::getValue(self::$servesCuisine);
	}
}
