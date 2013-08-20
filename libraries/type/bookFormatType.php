<?php
/**
 * The publication format of the book.
 *
 * @see    http://schema.org/BookFormatType
 * @since  1.0
*/
abstract class TypeBookFormatType extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BookFormatType';
}
