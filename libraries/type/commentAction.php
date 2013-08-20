<?php
/**
 * The act of generating a comment about a subject.
 *
 * @see    http://schema.org/CommentAction
 * @since  1.0
*/
abstract class TypeCommentAction extends TypeCommunicateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CommentAction';
}
