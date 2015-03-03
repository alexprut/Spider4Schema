<?php
/**
 * A subclass of Role used to describe roles within organizations.
 *
 * @see    http://schema.org/OrganizationRole
*/
abstract class TypeOrganizationRole extends TypeRole
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/OrganizationRole';

	/**
	 * A number associated with a role in an organization, for example, the number on an athlete's jersey.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $numberedPosition = array('value' => 'numberedPosition',
		'expectedTypes' => array('Number')
	);

	/**
	 * Return the 'numberedPosition' Property value
	 *
	 * @return	string
	 */
	public static function pNumberedPosition()
	{
		return self::getValue(self::$numberedPosition);
	}
}
