<?php
/**
 * The act of finding an object.Related actions:SearchAction: FindAction is generally lead by a SearchAction, but not necessarily.
 *
 * @see    http://schema.org/FindAction
 * @since  1.0
*/
abstract class TypeFindAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/FindAction';
}
