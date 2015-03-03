<?php
/**
 * A house painting service.
 *
 * @see    http://schema.org/HousePainter
*/
abstract class TypeHousePainter extends TypeHomeAndConstructionBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/HousePainter';
}
