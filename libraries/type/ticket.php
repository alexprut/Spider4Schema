<?php
/**
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 *
 * @see    http://schema.org/Ticket
*/
abstract class TypeTicket extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Ticket';

	/**
	 * The date the ticket was issued.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $dateIssued = array('value' => 'dateIssued',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The organization issuing the ticket or permit.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $issuedBy = array('value' => 'issuedBy',
		'expectedTypes' => array('Organization')
	);

	/**
	 * The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $priceCurrency = array('value' => 'priceCurrency',
		'expectedTypes' => array('Text')
	);

	/**
	 * The unique identifier for the ticket.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $ticketNumber = array('value' => 'ticketNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $ticketToken = array('value' => 'ticketToken',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * The seat associated with the ticket.
	 * Expected Type: Seat
	 * 
	 * @var	array
	 */
	protected static $ticketedSeat = array('value' => 'ticketedSeat',
		'expectedTypes' => array('Seat')
	);

	/**
	 * The total price for the reservation or ticket, including applicable taxes, shipping, etc.
	 * Expected Type: Text, Number, PriceSpecification
	 * 
	 * @var	array
	 */
	protected static $totalPrice = array('value' => 'totalPrice',
		'expectedTypes' => array('Text', 'Number', 'PriceSpecification')
	);

	/**
	 * The person or organization the reservation or ticket is for.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $underName = array('value' => 'underName',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * Return the 'dateIssued' Property value
	 *
	 * @return	string
	 */
	public static function pDateIssued()
	{
		return self::getValue(self::$dateIssued);
	}

	/**
	 * Return the 'issuedBy' Property value
	 *
	 * @return	string
	 */
	public static function pIssuedBy()
	{
		return self::getValue(self::$issuedBy);
	}

	/**
	 * Return the 'priceCurrency' Property value
	 *
	 * @return	string
	 */
	public static function pPriceCurrency()
	{
		return self::getValue(self::$priceCurrency);
	}

	/**
	 * Return the 'ticketNumber' Property value
	 *
	 * @return	string
	 */
	public static function pTicketNumber()
	{
		return self::getValue(self::$ticketNumber);
	}

	/**
	 * Return the 'ticketToken' Property value
	 *
	 * @return	string
	 */
	public static function pTicketToken()
	{
		return self::getValue(self::$ticketToken);
	}

	/**
	 * Return the 'ticketedSeat' Property value
	 *
	 * @return	string
	 */
	public static function pTicketedSeat()
	{
		return self::getValue(self::$ticketedSeat);
	}

	/**
	 * Return the 'totalPrice' Property value
	 *
	 * @return	string
	 */
	public static function pTotalPrice()
	{
		return self::getValue(self::$totalPrice);
	}

	/**
	 * Return the 'underName' Property value
	 *
	 * @return	string
	 */
	public static function pUnderName()
	{
		return self::getValue(self::$underName);
	}
}
