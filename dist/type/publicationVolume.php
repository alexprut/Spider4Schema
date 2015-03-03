<?php
/**
 * A part of a successively published publication such as a periodical or multi-volume work, often numbered. It may represent a time span, such as a year. See also blog post.
 *
 * @see    http://schema.org/PublicationVolume
*/
abstract class TypePublicationVolume extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PublicationVolume';

	/**
	 * The page on which the work ends; for example "138" or "xvi".
	 * Expected Type: Integer, Text
	 * 
	 * @var	array
	 */
	protected static $pageEnd = array('value' => 'pageEnd',
		'expectedTypes' => array('Integer', 'Text')
	);

	/**
	 * The page on which the work starts; for example "135" or "xiii".
	 * Expected Type: Integer, Text
	 * 
	 * @var	array
	 */
	protected static $pageStart = array('value' => 'pageStart',
		'expectedTypes' => array('Integer', 'Text')
	);

	/**
	 * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $pagination = array('value' => 'pagination',
		'expectedTypes' => array('Text')
	);

	/**
	 * Identifies the volume of publication or multi-part work; for example, "iii" or "2".
	 * Expected Type: Integer, Text
	 * 
	 * @var	array
	 */
	protected static $volumeNumber = array('value' => 'volumeNumber',
		'expectedTypes' => array('Integer', 'Text')
	);

	/**
	 * Return the 'pageEnd' Property value
	 *
	 * @return	string
	 */
	public static function pPageEnd()
	{
		return self::getValue(self::$pageEnd);
	}

	/**
	 * Return the 'pageStart' Property value
	 *
	 * @return	string
	 */
	public static function pPageStart()
	{
		return self::getValue(self::$pageStart);
	}

	/**
	 * Return the 'pagination' Property value
	 *
	 * @return	string
	 */
	public static function pPagination()
	{
		return self::getValue(self::$pagination);
	}

	/**
	 * Return the 'volumeNumber' Property value
	 *
	 * @return	string
	 */
	public static function pVolumeNumber()
	{
		return self::getValue(self::$volumeNumber);
	}
}
