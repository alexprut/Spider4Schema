<?php
/**
 * An entry point, within some Web-based protocol.
 *
 * @see    http://schema.org/EntryPoint
*/
abstract class TypeEntryPoint extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EntryPoint';

	/**
	 * An application that can complete the request.
	 * Expected Type: SoftwareApplication
	 * 
	 * @var	array
	 */
	protected static $application = array('value' => 'application',
		'expectedTypes' => array('SoftwareApplication')
	);

	/**
	 * The supported content type(s) for an EntryPoint response.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $contentType = array('value' => 'contentType',
		'expectedTypes' => array('Text')
	);

	/**
	 * The supported encoding type(s) for an EntryPoint request.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $encodingType = array('value' => 'encodingType',
		'expectedTypes' => array('Text')
	);

	/**
	 * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $httpMethod = array('value' => 'httpMethod',
		'expectedTypes' => array('Text')
	);

	/**
	 * An url template (RFC6570) that will be used to construct the target of the execution of the action.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $urlTemplate = array('value' => 'urlTemplate',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'application' Property value
	 *
	 * @return	string
	 */
	public static function pApplication()
	{
		return self::getValue(self::$application);
	}

	/**
	 * Return the 'contentType' Property value
	 *
	 * @return	string
	 */
	public static function pContentType()
	{
		return self::getValue(self::$contentType);
	}

	/**
	 * Return the 'encodingType' Property value
	 *
	 * @return	string
	 */
	public static function pEncodingType()
	{
		return self::getValue(self::$encodingType);
	}

	/**
	 * Return the 'httpMethod' Property value
	 *
	 * @return	string
	 */
	public static function pHttpMethod()
	{
		return self::getValue(self::$httpMethod);
	}

	/**
	 * Return the 'urlTemplate' Property value
	 *
	 * @return	string
	 */
	public static function pUrlTemplate()
	{
		return self::getValue(self::$urlTemplate);
	}
}
