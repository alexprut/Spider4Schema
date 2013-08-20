<?php
/**
 * The act of applying an object to its intended purpose.
 *
 * @see    http://schema.org/UseAction
 * @since  1.0
*/
abstract class TypeUseAction extends TypeConsumeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UseAction';
}
