<?php
/**
 * The act of responding instinctively and emotionally to an object, expressing a sentiment.
 *
 * @see    http://schema.org/ReactAction
 * @since  1.0
*/
abstract class TypeReactAction extends TypeAssessAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReactAction';
}
