<?php
/**
 * A table on a Web page.
 *
 * @see    http://schema.org/Table
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
