<?php
/**
 * Quantities such as distance, time, mass, weight, etc. Particular instances of say Mass are entities like '3 Kg' or '4 milligrams'.
 *
 * @see    http://schema.org/Quantity
*/
abstract class TypeQuantity extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Quantity';
}
