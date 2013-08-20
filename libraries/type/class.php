<?php
/**
 * A class, also often called a 'Type'; equivalent to rdfs:Class.
 *
 * @see    http://schema.org/Class
 * @since  1.0
*/
abstract class TypeClass extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Class';
}
