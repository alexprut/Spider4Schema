<?php
/**
 * The UserInteraction event in which a user comments on an item.
 *
 * @see    http://schema.org/UserComments
 * @since  1.0
*/
abstract class TypeUserComments extends TypeUserInteraction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UserComments';

	/**
	 * The text of the UserComment.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $commentText = array('value' => 'commentText',
		'expectedTypes' => array('Text')
	);

	/**
	 * The time at which the UserComment was made.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $commentTime = array('value' => 'commentTime',
		'expectedTypes' => array('Date')
	);

	/**
	 * The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $creator = array('value' => 'creator',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * Specifies the CreativeWork associated with the UserComment.
	 * Expected Type: CreativeWork
	 * 
	 * @var	array
	 */
	protected static $discusses = array('value' => 'discusses',
		'expectedTypes' => array('CreativeWork')
	);

	/**
	 * The URL at which a reply may be posted to the specified UserComment.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $replyToUrl = array('value' => 'replyToUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Return the 'commentText' Property value
	 *
	 * @return	string
	 */
	public static function pCommentText()
	{
		return self::getValue(self::$commentText);
	}

	/**
	 * Return the 'commentTime' Property value
	 *
	 * @return	string
	 */
	public static function pCommentTime()
	{
		return self::getValue(self::$commentTime);
	}

	/**
	 * Return the 'creator' Property value
	 *
	 * @return	string
	 */
	public static function pCreator()
	{
		return self::getValue(self::$creator);
	}

	/**
	 * Return the 'discusses' Property value
	 *
	 * @return	string
	 */
	public static function pDiscusses()
	{
		return self::getValue(self::$discusses);
	}

	/**
	 * Return the 'replyToUrl' Property value
	 *
	 * @return	string
	 */
	public static function pReplyToUrl()
	{
		return self::getValue(self::$replyToUrl);
	}
}
