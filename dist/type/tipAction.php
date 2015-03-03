<?php
/**
 * The act of giving money voluntarily to a beneficiary in recognition of services rendered.
 *
 * @see    http://schema.org/TipAction
*/
abstract class TypeTipAction extends TypeTradeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TipAction';

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
