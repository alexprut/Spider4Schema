<?php
/**
 * A mobile software application.
 *
 * @see    http://schema.org/MobileApplication
*/
abstract class TypeMobileApplication extends TypeSoftwareApplication
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MobileApplication';

	/**
	 * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $carrierRequirements = array('value' => 'carrierRequirements',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'carrierRequirements' Property value
	 *
	 * @return	string
	 */
	public static function pCarrierRequirements()
	{
		return self::getValue(self::$carrierRequirements);
	}
}
