<?php
/**
 * A shop that sells alcoholic drinks such as wine, beer, whisky and other spirits.
 *
 * @see    http://schema.org/LiquorStore
*/
abstract class TypeLiquorStore extends TypeStore
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LiquorStore';
}
