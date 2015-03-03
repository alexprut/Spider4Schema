<?php
/**
 * The publication format of the book.
 *
 * @see    http://schema.org/BookFormatType
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
