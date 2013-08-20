<?php
/**
 * A point in time recurring on multiple days in the form hh:mm:ss[Z|(+|-)hh:mm] (see XML schema for details).
 *
 * @see    http://schema.org/Time
 * @since  1.0
*/
abstract class TypeTime extends TypeDataType
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Time';
}
