<?php
/**
 * A table on the page.
 *
 * @see    http://schema.org/Table
 * @since  1.0
*/
abstract class TypeTable extends TypeWebPageElement
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Table';
}
