<?php
/**
 * Properties that take Mass as values are of the form '<Number> <Mass unit of measure>'. E.g., '7 kg'.
 *
 * @see    http://schema.org/Mass
*/
abstract class TypeMass extends TypeQuantity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Mass';
}
