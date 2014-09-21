<?php
/**
 * Data type: URL.
 *
 * @see    http://schema.org/URL
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
