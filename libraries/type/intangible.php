<?php
/**
 * A utility class that serves as the umbrella for a number of 'intangible' things such as quantities, structured values, etc.
 *
 * @see    http://schema.org/Intangible
 * @since  1.0
*/
abstract class TypeIntangible extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Intangible';
}
