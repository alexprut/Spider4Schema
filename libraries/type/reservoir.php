<?php
/**
 * A reservoir, like the Lake Kariba reservoir.
 *
 * @see    http://schema.org/Reservoir
*/
abstract class TypeReservoir extends TypeBodyOfWater
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Reservoir';
}
