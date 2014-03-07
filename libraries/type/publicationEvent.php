<?php
/**
 * A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of any type e.g. a broadcast event, an on-demand event, a book/journal publication via a variety of delivery media.
 *
 * @see    http://schema.org/PublicationEvent
*/
abstract class TypePublicationEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PublicationEvent';

	/**
	 * A flag to signal that the publication is accessible for free.
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $free = array('value' => 'free',
		'expectedTypes' => array('Boolean')
	);

	/**
	 * A broadcast service associated with the publication event
	 * Expected Type: BroadcastService
	 * 
	 * @var	array
	 */
	protected static $publishedOn = array('value' => 'publishedOn',
		'expectedTypes' => array('BroadcastService')
	);

	/**
	 * Return the 'free' Property value
	 *
	 * @return	string
	 */
	public static function pFree()
	{
		return self::getValue(self::$free);
	}

	/**
	 * Return the 'publishedOn' Property value
	 *
	 * @return	string
	 */
	public static function pPublishedOn()
	{
		return self::getValue(self::$publishedOn);
	}
}
