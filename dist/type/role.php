<?php
/**
 * Represents additional information about a relationship or property. For example a Role can be used to say that a 'member' role linking some SportsTeam to a player occurred during a particular time period. Or that a Person's 'actor' role in a Movie was for some particular characterName. Such properties can be attached to a Role entity, which is then associated with the main entities using ordinary properties like 'member' or 'actor'. See also blog post.
 *
 * @see    http://schema.org/Role
*/
abstract class TypeRole extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Role';

	/**
	 * The end date and time of the item (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $endDate = array('value' => 'endDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * A role played, performed or filled by a person or organization. For example, the team of creators for a comic book might fill the roles named 'inker', 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the position named 'Quarterback'. Supersedes namedPosition.
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $roleName = array('value' => 'roleName',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * The start date and time of the item (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $startDate = array('value' => 'startDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * Return the 'endDate' Property value
	 *
	 * @return	string
	 */
	public static function pEndDate()
	{
		return self::getValue(self::$endDate);
	}

	/**
	 * Return the 'roleName' Property value
	 *
	 * @return	string
	 */
	public static function pRoleName()
	{
		return self::getValue(self::$roleName);
	}

	/**
	 * Return the 'startDate' Property value
	 *
	 * @return	string
	 */
	public static function pStartDate()
	{
		return self::getValue(self::$startDate);
	}
}
