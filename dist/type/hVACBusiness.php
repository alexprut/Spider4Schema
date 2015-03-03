<?php
/**
 * A business that provide Heating, Ventilation and Air Conditioning services.
 *
 * @see    http://schema.org/HVACBusiness
*/
abstract class TypeHVACBusiness extends TypeHomeAndConstructionBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/HVACBusiness';
}
