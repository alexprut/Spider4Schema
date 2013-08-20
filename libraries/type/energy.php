<?php
/**
 * Properties that take Enerygy as values are of the form '<Number> <Energy unit of measure>'
 *
 * @see    http://schema.org/Energy
 * @since  1.0
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
