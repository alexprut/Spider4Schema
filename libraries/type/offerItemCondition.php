<?php
/**
 * A list of possible conditions for the item for sale.
 *
 * @see    http://schema.org/OfferItemCondition
 * @since  1.0
*/
abstract class TypeOfferItemCondition extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/OfferItemCondition';
}
