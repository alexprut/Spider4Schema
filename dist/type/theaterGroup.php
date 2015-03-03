<?php
/**
 * A theater group or company, for example, the Royal Shakespeare Company or Druid Theatre.
 *
 * @see    http://schema.org/TheaterGroup
*/
abstract class TypeTheaterGroup extends TypePerformingGroup
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TheaterGroup';
}
