<?php
/**
 * A retail good store.
 *
 * @see    http://schema.org/Store
*/
abstract class TypeStore extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Store';
}
