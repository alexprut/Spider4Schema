<?php
/**
 * An agent pays a price to a participant.
 *
 * @see    http://schema.org/PayAction
*/
abstract class TypePayAction extends TypeTradeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PayAction';

	/**
	 * A goal towards an action is taken. Can be concrete or abstract.
	 * Expected Type: Thing, MedicalDevicePurpose
	 * 
	 * @var	array
	 */
	protected static $purpose = array('value' => 'purpose',
		'expectedTypes' => array('Thing', 'MedicalDevicePurpose')
	);

	/**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * Expected Type: Organization, Audience, Person
	 * 
	 * @var	array
	 */
	protected static $recipient = array('value' => 'recipient',
		'expectedTypes' => array('Organization', 'Audience', 'Person')
	);

	/**
	 * Return the 'purpose' Property value
	 *
	 * @return	string
	 */
	public static function pPurpose()
	{
		return self::getValue(self::$purpose);
	}

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
