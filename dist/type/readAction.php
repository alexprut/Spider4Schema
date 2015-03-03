<?php
/**
 * The act of consuming written content.
 *
 * @see    http://schema.org/ReadAction
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
