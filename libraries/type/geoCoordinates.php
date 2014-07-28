<?php
/**
 * The geographic coordinates of a place or event.
 *
 * @see    http://schema.org/GeoCoordinates
*/
abstract class TypeGeoCoordinates extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/GeoCoordinates';

	/**
	 * The elevation of a location.
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $elevation = array('value' => 'elevation',
		'expectedTypes' => array('Text', 'Number')
	);

	/**
	 * The latitude of a location. For example 37.42242.
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $latitude = array('value' => 'latitude',
		'expectedTypes' => array('Text', 'Number')
	);

	/**
	 * The longitude of a location. For example -122.08585.
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $longitude = array('value' => 'longitude',
		'expectedTypes' => array('Text', 'Number')
	);

	/**
	 * Return the 'elevation' Property value
	 *
	 * @return	string
	 */
	public static function pElevation()
	{
		return self::getValue(self::$elevation);
	}

	/**
	 * Return the 'latitude' Property value
	 *
	 * @return	string
	 */
	public static function pLatitude()
	{
		return self::getValue(self::$latitude);
	}

	/**
	 * Return the 'longitude' Property value
	 *
	 * @return	string
	 */
	public static function pLongitude()
	{
		return self::getValue(self::$longitude);
	}
}
