<?php
/**
 * Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.
 *
 * @see    http://schema.org/Code
*/
abstract class TypeCode extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Code';

	/**
	 * Link to the repository where the un-compiled, human readable code and related code is located (SVN, github, CodePlex).
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $codeRepository = array('value' => 'codeRepository',
		'expectedTypes' => array('URL')
	);

	/**
	 * The computer programming language.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $programmingLanguage = array('value' => 'programmingLanguage',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $runtime = array('value' => 'runtime',
		'expectedTypes' => array('Text')
	);

	/**
	 * Full (compile ready) solution, code snippet, inline code, scripts, template.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $sampleType = array('value' => 'sampleType',
		'expectedTypes' => array('Text')
	);

	/**
	 * Target Operating System / Product to which the code applies. If applies to several versions, just the product name can be used.
	 * Expected Type: SoftwareApplication
	 * 
	 * @var	array
	 */
	protected static $targetProduct = array('value' => 'targetProduct',
		'expectedTypes' => array('SoftwareApplication')
	);

	/**
	 * Return the 'codeRepository' Property value
	 *
	 * @return	string
	 */
	public static function pCodeRepository()
	{
		return self::getValue(self::$codeRepository);
	}

	/**
	 * Return the 'programmingLanguage' Property value
	 *
	 * @return	string
	 */
	public static function pProgrammingLanguage()
	{
		return self::getValue(self::$programmingLanguage);
	}

	/**
	 * Return the 'runtime' Property value
	 *
	 * @return	string
	 */
	public static function pRuntime()
	{
		return self::getValue(self::$runtime);
	}

	/**
	 * Return the 'sampleType' Property value
	 *
	 * @return	string
	 */
	public static function pSampleType()
	{
		return self::getValue(self::$sampleType);
	}

	/**
	 * Return the 'targetProduct' Property value
	 *
	 * @return	string
	 */
	public static function pTargetProduct()
	{
		return self::getValue(self::$targetProduct);
	}
}
