<?php
/**
 * The act of expressing a difference of opinion with the object. An agent disagrees to/about an object (a proposition, topic or theme) with participants.
 *
 * @see    http://schema.org/DisagreeAction
*/
abstract class TypeDisagreeAction extends TypeReactAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DisagreeAction';
}
