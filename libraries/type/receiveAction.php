<?php
/**
 * The act of physically/electronically taking delivery of an object thathas been transferred from an origin to a destination. Reciprocal of SendAction.Related actions:SendAction: The reciprocal of ReceiveAction.TakeAction: Unlike TakeAction, ReceiveAction does not imply that the ownership has been transfered (e.g. I can receive a package, but it does not mean the package is now mine).
 *
 * @see    http://schema.org/ReceiveAction
*/
abstract class TypeReceiveAction extends TypeTransferAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReceiveAction';

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
	 * A sub property of participant. The participant who is at the sending end of the action.
	 * Expected Type: Organization, Audience, Person
	 * 
	 * @var	array
	 */
	protected static $sender = array('value' => 'sender',
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
	 * Return the 'sender' Property value
	 *
	 * @return	string
	 */
	public static function pSender()
	{
		return self::getValue(self::$sender);
	}
}
