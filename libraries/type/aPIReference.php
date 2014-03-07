<?php
/**
 * Reference documentation for application programming interfaces (APIs).
 *
 * @see    http://schema.org/APIReference
*/
abstract class TypeAPIReference extends TypeTechArticle
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/APIReference';

	/**
	 * Library file name e.g., mscorlib.dll, system.web.dll
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $assembly = array('value' => 'assembly',
		'expectedTypes' => array('Text')
	);

	/**
	 * Associated product/technology version. e.g., .NET Framework 4.5
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $assemblyVersion = array('value' => 'assemblyVersion',
		'expectedTypes' => array('Text')
	);

	/**
	 * Indicates whether API is managed or unmanaged.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $programmingModel = array('value' => 'programmingModel',
		'expectedTypes' => array('Text')
	);

	/**
	 * Type of app development: phone, Metro style, desktop, XBox, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $targetPlatform = array('value' => 'targetPlatform',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'assembly' Property value
	 *
	 * @return	string
	 */
	public static function pAssembly()
	{
		return self::getValue(self::$assembly);
	}

	/**
	 * Return the 'assemblyVersion' Property value
	 *
	 * @return	string
	 */
	public static function pAssemblyVersion()
	{
		return self::getValue(self::$assemblyVersion);
	}

	/**
	 * Return the 'programmingModel' Property value
	 *
	 * @return	string
	 */
	public static function pProgrammingModel()
	{
		return self::getValue(self::$programmingModel);
	}

	/**
	 * Return the 'targetPlatform' Property value
	 *
	 * @return	string
	 */
	public static function pTargetPlatform()
	{
		return self::getValue(self::$targetPlatform);
	}
}
