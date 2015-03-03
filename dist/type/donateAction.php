<?php
/**
 * The act of providing goods, services, or money without compensation, often for philanthropic reasons.
 *
 * @see    http://schema.org/DonateAction
*/
abstract class TypeDonateAction extends TypeTradeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DonateAction';

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
