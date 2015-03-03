<?php
/**
 * A software application.
 *
 * @see    http://schema.org/SoftwareApplication
*/
abstract class TypeSoftwareApplication extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SoftwareApplication';

	/**
	 * Type of software application, e.g. "Game, Multimedia".
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $applicationCategory = array('value' => 'applicationCategory',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * Subcategory of the application, e.g. "Arcade Game".
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $applicationSubCategory = array('value' => 'applicationSubCategory',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $applicationSuite = array('value' => 'applicationSuite',
		'expectedTypes' => array('Text')
	);

	/**
	 * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $countriesNotSupported = array('value' => 'countriesNotSupported',
		'expectedTypes' => array('Text')
	);

	/**
	 * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $countriesSupported = array('value' => 'countriesSupported',
		'expectedTypes' => array('Text')
	);

	/**
	 * Device required to run the application. Used in cases where a specific make/model is required to run the application.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $device = array('value' => 'device',
		'expectedTypes' => array('Text')
	);

	/**
	 * If the file can be downloaded, URL to download the binary.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $downloadUrl = array('value' => 'downloadUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Features or modules provided by this application (and possibly required by other applications).
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $featureList = array('value' => 'featureList',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * MIME format of the binary (e.g. application/zip).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $fileFormat = array('value' => 'fileFormat',
		'expectedTypes' => array('Text')
	);

	/**
	 * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $fileSize = array('value' => 'fileSize',
		'expectedTypes' => array('Integer')
	);

	/**
	 * URL at which the app may be installed, if different from the URL of the item.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $installUrl = array('value' => 'installUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Minimum memory requirements.
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $memoryRequirements = array('value' => 'memoryRequirements',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $operatingSystem = array('value' => 'operatingSystem',
		'expectedTypes' => array('Text')
	);

	/**
	 * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $permissions = array('value' => 'permissions',
		'expectedTypes' => array('Text')
	);

	/**
	 * Processor architecture required to run the application (e.g. IA64).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $processorRequirements = array('value' => 'processorRequirements',
		'expectedTypes' => array('Text')
	);

	/**
	 * Description of what changed in this version.
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $releaseNotes = array('value' => 'releaseNotes',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $requirements = array('value' => 'requirements',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * A link to a screenshot image of the app.
	 * Expected Type: ImageObject, URL
	 * 
	 * @var	array
	 */
	protected static $screenshot = array('value' => 'screenshot',
		'expectedTypes' => array('ImageObject', 'URL')
	);

	/**
	 * Additional content for a software application.
	 * Expected Type: SoftwareApplication
	 * 
	 * @var	array
	 */
	protected static $softwareAddOn = array('value' => 'softwareAddOn',
		'expectedTypes' => array('SoftwareApplication')
	);

	/**
	 * Software application help.
	 * Expected Type: CreativeWork
	 * 
	 * @var	array
	 */
	protected static $softwareHelp = array('value' => 'softwareHelp',
		'expectedTypes' => array('CreativeWork')
	);

	/**
	 * Version of the software instance.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $softwareVersion = array('value' => 'softwareVersion',
		'expectedTypes' => array('Text')
	);

	/**
	 * Storage requirements (free space required).
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $storageRequirements = array('value' => 'storageRequirements',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * Return the 'applicationCategory' Property value
	 *
	 * @return	string
	 */
	public static function pApplicationCategory()
	{
		return self::getValue(self::$applicationCategory);
	}

	/**
	 * Return the 'applicationSubCategory' Property value
	 *
	 * @return	string
	 */
	public static function pApplicationSubCategory()
	{
		return self::getValue(self::$applicationSubCategory);
	}

	/**
	 * Return the 'applicationSuite' Property value
	 *
	 * @return	string
	 */
	public static function pApplicationSuite()
	{
		return self::getValue(self::$applicationSuite);
	}

	/**
	 * Return the 'countriesNotSupported' Property value
	 *
	 * @return	string
	 */
	public static function pCountriesNotSupported()
	{
		return self::getValue(self::$countriesNotSupported);
	}

	/**
	 * Return the 'countriesSupported' Property value
	 *
	 * @return	string
	 */
	public static function pCountriesSupported()
	{
		return self::getValue(self::$countriesSupported);
	}

	/**
	 * Return the 'device' Property value
	 *
	 * @return	string
	 */
	public static function pDevice()
	{
		return self::getValue(self::$device);
	}

	/**
	 * Return the 'downloadUrl' Property value
	 *
	 * @return	string
	 */
	public static function pDownloadUrl()
	{
		return self::getValue(self::$downloadUrl);
	}

	/**
	 * Return the 'featureList' Property value
	 *
	 * @return	string
	 */
	public static function pFeatureList()
	{
		return self::getValue(self::$featureList);
	}

	/**
	 * Return the 'fileFormat' Property value
	 *
	 * @return	string
	 */
	public static function pFileFormat()
	{
		return self::getValue(self::$fileFormat);
	}

	/**
	 * Return the 'fileSize' Property value
	 *
	 * @return	string
	 */
	public static function pFileSize()
	{
		return self::getValue(self::$fileSize);
	}

	/**
	 * Return the 'installUrl' Property value
	 *
	 * @return	string
	 */
	public static function pInstallUrl()
	{
		return self::getValue(self::$installUrl);
	}

	/**
	 * Return the 'memoryRequirements' Property value
	 *
	 * @return	string
	 */
	public static function pMemoryRequirements()
	{
		return self::getValue(self::$memoryRequirements);
	}

	/**
	 * Return the 'operatingSystem' Property value
	 *
	 * @return	string
	 */
	public static function pOperatingSystem()
	{
		return self::getValue(self::$operatingSystem);
	}

	/**
	 * Return the 'permissions' Property value
	 *
	 * @return	string
	 */
	public static function pPermissions()
	{
		return self::getValue(self::$permissions);
	}

	/**
	 * Return the 'processorRequirements' Property value
	 *
	 * @return	string
	 */
	public static function pProcessorRequirements()
	{
		return self::getValue(self::$processorRequirements);
	}

	/**
	 * Return the 'releaseNotes' Property value
	 *
	 * @return	string
	 */
	public static function pReleaseNotes()
	{
		return self::getValue(self::$releaseNotes);
	}

	/**
	 * Return the 'requirements' Property value
	 *
	 * @return	string
	 */
	public static function pRequirements()
	{
		return self::getValue(self::$requirements);
	}

	/**
	 * Return the 'screenshot' Property value
	 *
	 * @return	string
	 */
	public static function pScreenshot()
	{
		return self::getValue(self::$screenshot);
	}

	/**
	 * Return the 'softwareAddOn' Property value
	 *
	 * @return	string
	 */
	public static function pSoftwareAddOn()
	{
		return self::getValue(self::$softwareAddOn);
	}

	/**
	 * Return the 'softwareHelp' Property value
	 *
	 * @return	string
	 */
	public static function pSoftwareHelp()
	{
		return self::getValue(self::$softwareHelp);
	}

	/**
	 * Return the 'softwareVersion' Property value
	 *
	 * @return	string
	 */
	public static function pSoftwareVersion()
	{
		return self::getValue(self::$softwareVersion);
	}

	/**
	 * Return the 'storageRequirements' Property value
	 *
	 * @return	string
	 */
	public static function pStorageRequirements()
	{
		return self::getValue(self::$storageRequirements);
	}
}
