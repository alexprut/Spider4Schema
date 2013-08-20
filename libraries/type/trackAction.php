<?php
/**
 * An agent tracks an object for updates.Related actions:FollowAction: Unlike FollowAction, TrackAction refers to the interest on the location of innanimates objects.SubscribeAction: Unlike SubscribeAction, TrackAction refers to  the interest on the location of innanimate objects.
 *
 * @see    http://schema.org/TrackAction
 * @since  1.0
*/
abstract class TypeTrackAction extends TypeFindAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TrackAction';

	/**
	 * A sub property of instrument. The method of delivery
	 * Expected Type: DeliveryMethod
	 * 
	 * @var	array
	 */
	protected static $deliveryMethod = array('value' => 'deliveryMethod',
		'expectedTypes' => array('DeliveryMethod')
	);

	/**
	 * Return the 'deliveryMethod' Property value
	 *
	 * @return	string
	 */
	public static function pDeliveryMethod()
	{
		return self::getValue(self::$deliveryMethod);
	}
}
