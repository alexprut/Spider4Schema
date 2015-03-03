<?php
/**
 * Classes of agents or pathogens that transmit infectious diseases. Enumerated type.
 *
 * @see    http://schema.org/InfectiousAgentClass
*/
abstract class TypeInfectiousAgentClass extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/InfectiousAgentClass';
}
