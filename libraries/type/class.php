<?php
/**
 * A class, also often called a 'Type'; equivalent to rdfs:Class.
 *
 * @see    http://schema.org/Class
*/
abstract class TypeClass extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Class';
}
