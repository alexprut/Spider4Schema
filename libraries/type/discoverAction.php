<?php
/**
 * The act of discovering/finding an object.
 *
 * @see    http://schema.org/DiscoverAction
 * @since  1.0
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
