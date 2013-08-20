<?php
/**
 * The act of intentionally disregarding the object. An agent ignores an object.
 *
 * @see    http://schema.org/IgnoreAction
 * @since  1.0
*/
abstract class TypeIgnoreAction extends TypeAssessAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/IgnoreAction';
}
