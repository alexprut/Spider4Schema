<?php
/**
 * The act of physically/electronically dispatching an object for transfer from an origin to a destination.Related actions:ReceiveAction: The reciprocal of SendAction.GiveAction: Unlike GiveAction, SendAction does not imply the transfer of ownership (e.g. I can send you my laptop, but I'm not necessarily giving it to you).
 *
 * @see    http://schema.org/SendAction
*/
abstract class TypeSendAction extends TypeTransferAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SendAction';

	/**
	 * A sub property of instrument. The method of delivery
	 * Expected Type: DeliveryMethod
	 * 
	 * @var	array
	 */
	protected static $deliveryMethod = array('value' => 'deliveryMethod',
		'expectedTypes' => array('DeliveryMethod')
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
	 * Return the 'deliveryMethod' Property value
	 *
	 * @return	string
	 */
	public static function pDeliveryMethod()
	{
		return self::getValue(self::$deliveryMethod);
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
