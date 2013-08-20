<?php
/**
 * The act of expressing a negative sentiment about the object. An agent dislikes an object (a proposition, topic or theme) with participants.
 *
 * @see    http://schema.org/DislikeAction
 * @since  1.0
*/
abstract class TypeDislikeAction extends TypeReactAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DislikeAction';
}
