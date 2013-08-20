<?php
/**
 * A legislative building—for example, the state capitol.
 *
 * @see    http://schema.org/LegislativeBuilding
 * @since  1.0
*/
abstract class TypeLegislativeBuilding extends TypeGovernmentBuilding
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LegislativeBuilding';
}
