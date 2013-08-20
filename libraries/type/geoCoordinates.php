<?php
/**
 * The geographic coordinates of a place or event.
 *
 * @see    http://schema.org/GeoCoordinates
 * @since  1.0
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
	 * Expected Type: Number, Text
	 * 
	 * @var	array
	 */
	protected static $elevation = array('value' => 'elevation',
		'expectedTypes' => array('Number', 'Text')
	);

	/**
	 * The latitude of a location. For example 37.42242.
	 * Expected Type: Number, Text
	 * 
	 * @var	array
	 */
	protected static $latitude = array('value' => 'latitude',
		'expectedTypes' => array('Number', 'Text')
	);

	/**
	 * The longitude of a location. For example -122.08585.
	 * Expected Type: Number, Text
	 * 
	 * @var	array
	 */
	protected static $longitude = array('value' => 'longitude',
		'expectedTypes' => array('Number', 'Text')
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
