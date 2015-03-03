<?php
/**
 * The act of returning to the origin that which was previously received (concrete objects) or taken (ownership).
 *
 * @see    http://schema.org/ReturnAction
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
	 * Expected Type: Person, Audience, Organization
	 * 
	 * @var	array
	 */
	protected static $recipient = array('value' => 'recipient',
		'expectedTypes' => array('Person', 'Audience', 'Organization')
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
