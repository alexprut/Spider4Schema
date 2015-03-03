<?php
/**
 * A series of books. Included books can be indicated with the hasPart property.
 *
 * @see    http://schema.org/BookSeries
*/
abstract class TypeBookSeries extends TypeSeries
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BookSeries';
}
