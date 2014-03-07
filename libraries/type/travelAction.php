<?php
/**
 * The act of traveling from an fromLocation to a destination by a specified mode of transport, optionally with participants.
 *
 * @see    http://schema.org/TravelAction
*/
abstract class TypeTravelAction extends TypeMoveAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TravelAction';

	/**
	 * A sub property of asset. The distance travelled.
	 * Expected Type: Distance
	 * 
	 * @var	array
	 */
	protected static $distance = array('value' => 'distance',
		'expectedTypes' => array('Distance')
	);

	/**
	 * Return the 'distance' Property value
	 *
	 * @return	string
	 */
	public static function pDistance()
	{
		return self::getValue(self::$distance);
	}
}
