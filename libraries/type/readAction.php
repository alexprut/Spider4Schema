<?php
/**
 * The act of consuming written content.
 *
 * @see    http://schema.org/ReadAction
 * @since  1.0
*/
abstract class TypeReadAction extends TypeConsumeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReadAction';
}
