<?php
/**
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"), traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
 *
 * @see    http://schema.org/ProgramMembership
*/
abstract class TypeProgramMembership extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ProgramMembership';

	/**
	 * The organization (airline, travelers' club, etc.) the membership is made with.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $hostingOrganization = array('value' => 'hostingOrganization',
		'expectedTypes' => array('Organization')
	);

	/**
	 * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals. Supercedes members. Inverse property: memberOf.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $member = array('value' => 'member',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * A unique identifier for the membership.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $membershipNumber = array('value' => 'membershipNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The program providing the membership.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $programName = array('value' => 'programName',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'hostingOrganization' Property value
	 *
	 * @return	string
	 */
	public static function pHostingOrganization()
	{
		return self::getValue(self::$hostingOrganization);
	}

	/**
	 * Return the 'member' Property value
	 *
	 * @return	string
	 */
	public static function pMember()
	{
		return self::getValue(self::$member);
	}

	/**
	 * Return the 'membershipNumber' Property value
	 *
	 * @return	string
	 */
	public static function pMembershipNumber()
	{
		return self::getValue(self::$membershipNumber);
	}

	/**
	 * Return the 'programName' Property value
	 *
	 * @return	string
	 */
	public static function pProgramName()
	{
		return self::getValue(self::$programName);
	}
}
