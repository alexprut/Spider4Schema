<?php
/**
 * A real-estate agent.
 *
 * @see    http://schema.org/RealEstateAgent
 * @since  1.0
*/
abstract class TypeRealEstateAgent extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RealEstateAgent';
}
