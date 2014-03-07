<?php
/**
 * A list of possible conditions for the item.
 *
 * @see    http://schema.org/OfferItemCondition
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
