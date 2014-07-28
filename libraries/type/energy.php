<?php
/**
 * Properties that take Energy as values are of the form '<Number> <Energy unit of measure>'
 *
 * @see    http://schema.org/Energy
*/
abstract class TypeEnergy extends TypeQuantity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Energy';
}
