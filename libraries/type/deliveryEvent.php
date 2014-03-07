<?php
/**
 * An event involving the delivery of an item.
 *
 * @see    http://schema.org/DeliveryEvent
*/
abstract class TypeDeliveryEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DeliveryEvent';

	/**
	 * Password, PIN, or access code needed for delivery (e.g. from a locker).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $accessCode = array('value' => 'accessCode',
		'expectedTypes' => array('Text')
	);

	/**
	 * When the item is available for pickup from the store, locker, etc.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $availableFrom = array('value' => 'availableFrom',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * After this date, the item will no longer be available for pickup.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $availableThrough = array('value' => 'availableThrough',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Method used for delivery or shipping.
	 * Expected Type: DeliveryMethod
	 * 
	 * @var	array
	 */
	protected static $hasDeliveryMethod = array('value' => 'hasDeliveryMethod',
		'expectedTypes' => array('DeliveryMethod')
	);

	/**
	 * Return the 'accessCode' Property value
	 *
	 * @return	string
	 */
	public static function pAccessCode()
	{
		return self::getValue(self::$accessCode);
	}

	/**
	 * Return the 'availableFrom' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableFrom()
	{
		return self::getValue(self::$availableFrom);
	}

	/**
	 * Return the 'availableThrough' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableThrough()
	{
		return self::getValue(self::$availableThrough);
	}

	/**
	 * Return the 'hasDeliveryMethod' Property value
	 *
	 * @return	string
	 */
	public static function pHasDeliveryMethod()
	{
		return self::getValue(self::$hasDeliveryMethod);
	}
}
