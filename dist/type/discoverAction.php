<?php
/**
 * The act of discovering/finding an object.
 *
 * @see    http://schema.org/DiscoverAction
*/
abstract class TypeDiscoverAction extends TypeFindAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DiscoverAction';
}
