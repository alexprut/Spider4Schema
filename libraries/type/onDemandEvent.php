<?php
/**
 * A publication event e.g. catch-up TV or radio podcast, during which a program is available on-demand.
 *
 * @see    http://schema.org/OnDemandEvent
*/
abstract class TypeOnDemandEvent extends TypePublicationEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/OnDemandEvent';
}
