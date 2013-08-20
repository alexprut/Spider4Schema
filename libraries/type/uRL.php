<?php
/**
 * Data type: URL.
 *
 * @see    http://schema.org/URL
 * @since  1.0
*/
abstract class TypeURL extends TypeText
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/URL';
}
