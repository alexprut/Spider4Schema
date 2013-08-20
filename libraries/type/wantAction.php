<?php
/**
 * The act of expressing a desire about the object. An agent wants an object.
 *
 * @see    http://schema.org/WantAction
 * @since  1.0
*/
abstract class TypeWantAction extends TypeReactAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WantAction';
}
