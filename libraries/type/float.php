<?php
/**
 * Data type: Floating number.
 *
 * @see    http://schema.org/Float
*/
abstract class TypeFloat extends TypeNumber
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Float';
}
