<?php
/**
 * A DeliveryMethod in which an item is collected on site, e.g. in a store or at a box office.
 *
 * @see    http://schema.org/OnSitePickup
*/
abstract class TypeOnSitePickup extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/OnSitePickup';
}
