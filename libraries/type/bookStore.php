<?php
/**
 * A bookstore.
 *
 * @see    http://schema.org/BookStore
 * @since  1.0
*/
abstract class TypeBookStore extends TypeStore
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BookStore';
}
