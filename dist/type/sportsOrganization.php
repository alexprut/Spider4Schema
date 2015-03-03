<?php
/**
 * Represents the collection of all sports organizations, including sports teams, governing bodies, and sports associations.
 *
 * @see    http://schema.org/SportsOrganization
*/
abstract class TypeSportsOrganization extends TypeOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SportsOrganization';

	/**
	 * A type of sport (e.g. Baseball).
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $sport = array('value' => 'sport',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * Return the 'sport' Property value
	 *
	 * @return	string
	 */
	public static function pSport()
	{
		return self::getValue(self::$sport);
	}
}
