<?php
/**
 * The act of expressing a consistency of opinion with the object. An agent agrees to/about an object (a proposition, topic or theme) with participants.
 *
 * @see    http://schema.org/AgreeAction
 * @since  1.0
*/
abstract class TypeAgreeAction extends TypeReactAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AgreeAction';
}
