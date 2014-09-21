<?php
/**
 * Structured values are strings—for example, addresses—that have certain constraints on their structure.
 *
 * @see    http://schema.org/StructuredValue
*/
abstract class TypeStructuredValue extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/StructuredValue';
}
