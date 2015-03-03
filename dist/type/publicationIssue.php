<?php
/**
 * A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of works such as articles. See also blog post.
 *
 * @see    http://schema.org/PublicationIssue
*/
abstract class TypePublicationIssue extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PublicationIssue';

	/**
	 * Identifies the issue of publication; for example, "iii" or "2".
	 * Expected Type: Text, Integer
	 * 
	 * @var	array
	 */
	protected static $issueNumber = array('value' => 'issueNumber',
		'expectedTypes' => array('Text', 'Integer')
	);

	/**
	 * The page on which the work ends; for example "138" or "xvi".
	 * Expected Type: Text, Integer
	 * 
	 * @var	array
	 */
	protected static $pageEnd = array('value' => 'pageEnd',
		'expectedTypes' => array('Text', 'Integer')
	);

	/**
	 * The page on which the work starts; for example "135" or "xiii".
	 * Expected Type: Text, Integer
	 * 
	 * @var	array
	 */
	protected static $pageStart = array('value' => 'pageStart',
		'expectedTypes' => array('Text', 'Integer')
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
	 * Return the 'issueNumber' Property value
	 *
	 * @return	string
	 */
	public static function pIssueNumber()
	{
		return self::getValue(self::$issueNumber);
	}

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
}
