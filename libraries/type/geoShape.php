<?php
/**
 * The geographic shape of a place.
 *
 * @see    http://schema.org/GeoShape
*/
abstract class TypeGeoShape extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/GeoShape';

	/**
	 * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more spacedelimited points where the first and final points are identical.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $box = array('value' => 'box',
		'expectedTypes' => array('Text')
	);

	/**
	 * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $circle = array('value' => 'circle',
		'expectedTypes' => array('Text')
	);

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
	 * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $line = array('value' => 'line',
		'expectedTypes' => array('Text')
	);

	/**
	 * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more spacedelimited points where the first and final points are identical.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $polygon = array('value' => 'polygon',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'box' Property value
	 *
	 * @return	string
	 */
	public static function pBox()
	{
		return self::getValue(self::$box);
	}

	/**
	 * Return the 'circle' Property value
	 *
	 * @return	string
	 */
	public static function pCircle()
	{
		return self::getValue(self::$circle);
	}

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
	 * Return the 'line' Property value
	 *
	 * @return	string
	 */
	public static function pLine()
	{
		return self::getValue(self::$line);
	}

	/**
	 * Return the 'polygon' Property value
	 *
	 * @return	string
	 */
	public static function pPolygon()
	{
		return self::getValue(self::$polygon);
	}
}
