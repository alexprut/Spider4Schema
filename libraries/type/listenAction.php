<?php
/**
 * The act of consuming audio content.
 *
 * @see    http://schema.org/ListenAction
 * @since  1.0
*/
abstract class TypeListenAction extends TypeConsumeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ListenAction';
}
