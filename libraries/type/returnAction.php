<?php
/**
 * The act of returning to the origin that which was previously received (concrete objects) or taken (ownership).
 *
 * @see    http://schema.org/ReturnAction
 * @since  1.0
*/
abstract class TypeReturnAction extends TypeTransferAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReturnAction';

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
