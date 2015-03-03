<?php
/**
 * A delivery service through which content is provided via broadcast over the air or online.
 *
 * @see    http://schema.org/BroadcastService
*/
abstract class TypeBroadcastService extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BroadcastService';

	/**
	 * The area within which users can expect to reach the broadcast service.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $area = array('value' => 'area',
		'expectedTypes' => array('Place')
	);

	/**
	 * The organization owning or operating the broadcast service.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $broadcaster = array('value' => 'broadcaster',
		'expectedTypes' => array('Organization')
	);

	/**
	 * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
	 * Expected Type: BroadcastService
	 * 
	 * @var	array
	 */
	protected static $parentService = array('value' => 'parentService',
		'expectedTypes' => array('BroadcastService')
	);

	/**
	 * Return the 'area' Property value
	 *
	 * @return	string
	 */
	public static function pArea()
	{
		return self::getValue(self::$area);
	}

	/**
	 * Return the 'broadcaster' Property value
	 *
	 * @return	string
	 */
	public static function pBroadcaster()
	{
		return self::getValue(self::$broadcaster);
	}

	/**
	 * Return the 'parentService' Property value
	 *
	 * @return	string
	 */
	public static function pParentService()
	{
		return self::getValue(self::$parentService);
	}
}
