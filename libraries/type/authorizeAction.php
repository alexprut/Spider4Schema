<?php
/**
 * The act of granting permission to an object.
 *
 * @see    http://schema.org/AuthorizeAction
*/
abstract class TypeAuthorizeAction extends TypeAllocateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AuthorizeAction';

	/**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * Expected Type: Audience, Organization, Person
	 * 
	 * @var	array
	 */
	protected static $recipient = array('value' => 'recipient',
		'expectedTypes' => array('Audience', 'Organization', 'Person')
	);

	/**
	 * Return the 'recipient' Property value
	 *
	 * @return	string
	 */
	public static function pRecipient()
	{
		return self::getValue(self::$recipient);
	}
}
