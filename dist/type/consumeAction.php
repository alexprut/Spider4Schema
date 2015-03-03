<?php
/**
 * The act of ingesting information/resources/food.
 *
 * @see    http://schema.org/ConsumeAction
*/
abstract class TypeConsumeAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ConsumeAction';

	/**
	 * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
	 * Expected Type: Offer
	 * 
	 * @var	array
	 */
	protected static $expectsAcceptanceOf = array('value' => 'expectsAcceptanceOf',
		'expectedTypes' => array('Offer')
	);

	/**
	 * Return the 'expectsAcceptanceOf' Property value
	 *
	 * @return	string
	 */
	public static function pExpectsAcceptanceOf()
	{
		return self::getValue(self::$expectsAcceptanceOf);
	}
}
