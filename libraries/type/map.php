<?php
/**
 * A map.
 *
 * @see    http://schema.org/Map
*/
abstract class TypeMap extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Map';

	/**
	 * Indicates the kind of Map, from the MapCategoryType Enumeration.
	 * Expected Type: MapCategoryType
	 * 
	 * @var	array
	 */
	protected static $mapType = array('value' => 'mapType',
		'expectedTypes' => array('MapCategoryType')
	);

	/**
	 * Return the 'mapType' Property value
	 *
	 * @return	string
	 */
	public static function pMapType()
	{
		return self::getValue(self::$mapType);
	}
}
