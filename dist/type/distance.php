<?php
/**
 * Properties that take Distances as values are of the form '<Number> <Length unit of measure>'. E.g., '7 ft'.
 *
 * @see    http://schema.org/Distance
*/
abstract class TypeDistance extends TypeQuantity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Distance';
}
