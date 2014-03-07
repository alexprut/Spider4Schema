<?php
/**
 * The act of responding instinctively and emotionally to an object, expressing a sentiment.
 *
 * @see    http://schema.org/ReactAction
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
