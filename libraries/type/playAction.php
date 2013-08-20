<?php
/**
 * The act of playing/exercising/training/performing for enjoyment, leisure, recreation, competion or exercise.Related actions:ListenAction: Unlike ListenAction (which is under ConsumeAction), PlayAction refers to performing for an audience or at an event, rather than consuming music.WatchAction: Unlike WatchAction (which is under ConsumeAction), PlayAction refers to showing/displaying for an audience or at an event, rather than consuming visual content.
 *
 * @see    http://schema.org/PlayAction
 * @since  1.0
*/
abstract class TypePlayAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PlayAction';

	/**
	 * The intended audience of the item, i.e. the group for whom the item was created.
	 * Expected Type: Audience
	 * 
	 * @var	array
	 */
	protected static $audience = array('value' => 'audience',
		'expectedTypes' => array('Audience')
	);

	/**
	 * Upcoming or past event associated with this place or organization.
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $event = array('value' => 'event',
		'expectedTypes' => array('Event')
	);

	/**
	 * Return the 'audience' Property value
	 *
	 * @return	string
	 */
	public static function pAudience()
	{
		return self::getValue(self::$audience);
	}

	/**
	 * Return the 'event' Property value
	 *
	 * @return	string
	 */
	public static function pEvent()
	{
		return self::getValue(self::$event);
	}
}
