<?php
/**
 * The act of expressing a positive sentiment about the object. An agent likes an object (a proposition, topic or theme) with participants.
 *
 * @see    http://schema.org/LikeAction
*/
abstract class TypeLikeAction extends TypeReactAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LikeAction';
}
