<?php
/**
 * An answer offered to a question; perhaps correct, perhaps opinionated or wrong.
 *
 * @see    http://schema.org/Answer
*/
abstract class TypeAnswer extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Answer';

	/**
	 * The number of downvotes this question has received from the community.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $downvoteCount = array('value' => 'downvoteCount',
		'expectedTypes' => array('Integer')
	);

	/**
	 * The parent of a question, answer or item in general.
	 * Expected Type: Question
	 * 
	 * @var	array
	 */
	protected static $parentItem = array('value' => 'parentItem',
		'expectedTypes' => array('Question')
	);

	/**
	 * The number of upvotes this question has received from the community.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $upvoteCount = array('value' => 'upvoteCount',
		'expectedTypes' => array('Integer')
	);

	/**
	 * Return the 'downvoteCount' Property value
	 *
	 * @return	string
	 */
	public static function pDownvoteCount()
	{
		return self::getValue(self::$downvoteCount);
	}

	/**
	 * Return the 'parentItem' Property value
	 *
	 * @return	string
	 */
	public static function pParentItem()
	{
		return self::getValue(self::$parentItem);
	}

	/**
	 * Return the 'upvoteCount' Property value
	 *
	 * @return	string
	 */
	public static function pUpvoteCount()
	{
		return self::getValue(self::$upvoteCount);
	}
}
