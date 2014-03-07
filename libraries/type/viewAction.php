<?php
/**
 * The act of consuming static visual content.
 *
 * @see    http://schema.org/ViewAction
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
