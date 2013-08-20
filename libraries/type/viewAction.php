<?php
/**
 * The act of consuming static visual content.
 *
 * @see    http://schema.org/ViewAction
 * @since  1.0
*/
abstract class TypeViewAction extends TypeConsumeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ViewAction';
}
