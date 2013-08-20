<?php
/**
 * Web applications.
 *
 * @see    http://schema.org/WebApplication
 * @since  1.0
*/
abstract class TypeWebApplication extends TypeSoftwareApplication
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WebApplication';

	/**
	 * Specifies browser requirements in human-readable text. For example,"requires HTML5 support".
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $browserRequirements = array('value' => 'browserRequirements',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'browserRequirements' Property value
	 *
	 * @return	string
	 */
	public static function pBrowserRequirements()
	{
		return self::getValue(self::$browserRequirements);
	}
}
