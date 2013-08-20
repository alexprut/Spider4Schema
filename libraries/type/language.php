<?php
/**
 * Natural languages such as Spanish, Tamil, Hindi, English, etc. and programming languages such as Scheme and Lisp.
 *
 * @see    http://schema.org/Language
 * @since  1.0
*/
abstract class TypeLanguage extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Language';
}
