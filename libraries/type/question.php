<?php
/**
 * A specific question - e.g. from a user seeking answers online, or collected in a Frequently Asked Questions (FAQ) document.
 *
 * @see    http://schema.org/Question
*/
abstract class TypeQuestion extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Question';

	/**
	 * The answer that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
	 * Expected Type: Answer
	 * 
	 * @var	array
	 */
	protected static $acceptedAnswer = array('value' => 'acceptedAnswer',
		'expectedTypes' => array('Answer')
	);

	/**
	 * The number of answers this question has received.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $answerCount = array('value' => 'answerCount',
		'expectedTypes' => array('Integer')
	);

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
	 * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
	 * Expected Type: Answer
	 * 
	 * @var	array
	 */
	protected static $suggestedAnswer = array('value' => 'suggestedAnswer',
		'expectedTypes' => array('Answer')
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
	 * Return the 'acceptedAnswer' Property value
	 *
	 * @return	string
	 */
	public static function pAcceptedAnswer()
	{
		return self::getValue(self::$acceptedAnswer);
	}

	/**
	 * Return the 'answerCount' Property value
	 *
	 * @return	string
	 */
	public static function pAnswerCount()
	{
		return self::getValue(self::$answerCount);
	}

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
	 * Return the 'suggestedAnswer' Property value
	 *
	 * @return	string
	 */
	public static function pSuggestedAnswer()
	{
		return self::getValue(self::$suggestedAnswer);
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
