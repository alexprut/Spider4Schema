<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * A person (alive, dead, undead, or fictional).
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Person
 * @since       13.1
*/
abstract class TypePerson extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Person';

	/**
	 * An additional name for a Person, can be used for a middle name.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $additionalName = array('value' => 'additionalName',
		'expectedTypes' => array('Text')
	);

	/**
	 * Physical address of the item.
	 * Expected Type: PostalAddress
	 * 
	 * @var	array
	 */
	protected static $address = array('value' => 'address',
		'expectedTypes' => array('PostalAddress')
	);

	/**
	 * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $affiliation = array('value' => 'affiliation',
		'expectedTypes' => array('Organization')
	);

	/**
	 * An educational organizations that the person is an alumni of.
	 * Expected Type: EducationalOrganization
	 * 
	 * @var	array
	 */
	protected static $alumniOf = array('value' => 'alumniOf',
		'expectedTypes' => array('EducationalOrganization')
	);

	/**
	 * An award won by this person or for this creative work.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $award = array('value' => 'award',
		'expectedTypes' => array('Text')
	);

	/**
	 * Awards won by this person or for this creative work. (legacy spelling; see singular form, award)
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $awards = array('value' => 'awards',
		'expectedTypes' => array('Text')
	);

	/**
	 * Date of birth.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $birthDate = array('value' => 'birthDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	 * Expected Type: Brand, Organization
	 * 
	 * @var	array
	 */
	protected static $brand = array('value' => 'brand',
		'expectedTypes' => array('Brand', 'Organization')
	);

	/**
	 * A child of the person.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $children = array('value' => 'children',
		'expectedTypes' => array('Person')
	);

	/**
	 * A colleague of the person.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $colleague = array('value' => 'colleague',
		'expectedTypes' => array('Person')
	);

	/**
	 * A colleague of the person (legacy spelling; see singular form, colleague).
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $colleagues = array('value' => 'colleagues',
		'expectedTypes' => array('Person')
	);

	/**
	 * A contact point for a person or organization.
	 * Expected Type: ContactPoint
	 * 
	 * @var	array
	 */
	protected static $contactPoint = array('value' => 'contactPoint',
		'expectedTypes' => array('ContactPoint')
	);

	/**
	 * A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
	 * Expected Type: ContactPoint
	 * 
	 * @var	array
	 */
	protected static $contactPoints = array('value' => 'contactPoints',
		'expectedTypes' => array('ContactPoint')
	);

	/**
	 * Date of death.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $deathDate = array('value' => 'deathDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The Dun & Bradstreet DUNS number for identifying an organization or business person.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $duns = array('value' => 'duns',
		'expectedTypes' => array('Text')
	);

	/**
	 * Email address.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $email = array('value' => 'email',
		'expectedTypes' => array('Text')
	);

	/**
	 * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the Name property.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $familyName = array('value' => 'familyName',
		'expectedTypes' => array('Text')
	);

	/**
	 * The fax number.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $faxNumber = array('value' => 'faxNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The most generic uni-directional social relation.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $follows = array('value' => 'follows',
		'expectedTypes' => array('Person')
	);

	/**
	 * Gender of the person.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $gender = array('value' => 'gender',
		'expectedTypes' => array('Text')
	);

	/**
	 * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the Name property.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $givenName = array('value' => 'givenName',
		'expectedTypes' => array('Text')
	);

	/**
	 * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $globalLocationNumber = array('value' => 'globalLocationNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * Points-of-Sales operated by the organization or person.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $hasPOS = array('value' => 'hasPOS',
		'expectedTypes' => array('Place')
	);

	/**
	 * A contact location for a person's residence.
	 * Expected Type: ContactPoint, Place
	 * 
	 * @var	array
	 */
	protected static $homeLocation = array('value' => 'homeLocation',
		'expectedTypes' => array('ContactPoint', 'Place')
	);

	/**
	 * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $honorificPrefix = array('value' => 'honorificPrefix',
		'expectedTypes' => array('Text')
	);

	/**
	 * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $honorificSuffix = array('value' => 'honorificSuffix',
		'expectedTypes' => array('Text')
	);

	/**
	 * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $interactionCount = array('value' => 'interactionCount',
		'expectedTypes' => array('Text')
	);

	/**
	 * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $isicV4 = array('value' => 'isicV4',
		'expectedTypes' => array('Text')
	);

	/**
	 * The job title of the person (for example, Financial Manager).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $jobTitle = array('value' => 'jobTitle',
		'expectedTypes' => array('Text')
	);

	/**
	 * The most generic bi-directional social/work relation.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $knows = array('value' => 'knows',
		'expectedTypes' => array('Person')
	);

	/**
	 * A pointer to products or services offered by the organization or person.
	 * Expected Type: Offer
	 * 
	 * @var	array
	 */
	protected static $makesOffer = array('value' => 'makesOffer',
		'expectedTypes' => array('Offer')
	);

	/**
	 * An organization to which the person belongs.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $memberOf = array('value' => 'memberOf',
		'expectedTypes' => array('Organization')
	);

	/**
	 * The North American Industry Classification System (NAICS) code for a particular organization or business person.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $naics = array('value' => 'naics',
		'expectedTypes' => array('Text')
	);

	/**
	 * Nationality of the person.
	 * Expected Type: Country
	 * 
	 * @var	array
	 */
	protected static $nationality = array('value' => 'nationality',
		'expectedTypes' => array('Country')
	);

	/**
	 * Products owned by the organization or person.
	 * Expected Type: OwnershipInfo, Product
	 * 
	 * @var	array
	 */
	protected static $owns = array('value' => 'owns',
		'expectedTypes' => array('OwnershipInfo', 'Product')
	);

	/**
	 * A parent of this person.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $parent = array('value' => 'parent',
		'expectedTypes' => array('Person')
	);

	/**
	 * A parents of the person (legacy spelling; see singular form, parent).
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $parents = array('value' => 'parents',
		'expectedTypes' => array('Person')
	);

	/**
	 * Event that this person is a performer or participant in.
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $performerIn = array('value' => 'performerIn',
		'expectedTypes' => array('Event')
	);

	/**
	 * The most generic familial relation.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $relatedTo = array('value' => 'relatedTo',
		'expectedTypes' => array('Person')
	);

	/**
	 * A pointer to products or services sought by the organization or person (demand).
	 * Expected Type: Demand
	 * 
	 * @var	array
	 */
	protected static $seeks = array('value' => 'seeks',
		'expectedTypes' => array('Demand')
	);

	/**
	 * A sibling of the person.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $sibling = array('value' => 'sibling',
		'expectedTypes' => array('Person')
	);

	/**
	 * A sibling of the person (legacy spelling; see singular form, sibling).
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $siblings = array('value' => 'siblings',
		'expectedTypes' => array('Person')
	);

	/**
	 * The person's spouse.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $spouse = array('value' => 'spouse',
		'expectedTypes' => array('Person')
	);

	/**
	 * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $taxID = array('value' => 'taxID',
		'expectedTypes' => array('Text')
	);

	/**
	 * The telephone number.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $telephone = array('value' => 'telephone',
		'expectedTypes' => array('Text')
	);

	/**
	 * The Value-added Tax ID of the organisation or person.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $vatID = array('value' => 'vatID',
		'expectedTypes' => array('Text')
	);

	/**
	 * A contact location for a person's place of work.
	 * Expected Type: ContactPoint, Place
	 * 
	 * @var	array
	 */
	protected static $workLocation = array('value' => 'workLocation',
		'expectedTypes' => array('ContactPoint', 'Place')
	);

	/**
	 * Organizations that the person works for.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $worksFor = array('value' => 'worksFor',
		'expectedTypes' => array('Organization')
	);

	/**
	 * Return the 'additionalName' Property value
	 *
	 * @return	string
	 */
	public static function pAdditionalName()
	{
		return self::getValue(self::$additionalName);
	}

	/**
	 * Return the 'address' Property value
	 *
	 * @return	string
	 */
	public static function pAddress()
	{
		return self::getValue(self::$address);
	}

	/**
	 * Return the 'affiliation' Property value
	 *
	 * @return	string
	 */
	public static function pAffiliation()
	{
		return self::getValue(self::$affiliation);
	}

	/**
	 * Return the 'alumniOf' Property value
	 *
	 * @return	string
	 */
	public static function pAlumniOf()
	{
		return self::getValue(self::$alumniOf);
	}

	/**
	 * Return the 'award' Property value
	 *
	 * @return	string
	 */
	public static function pAward()
	{
		return self::getValue(self::$award);
	}

	/**
	 * Return the 'awards' Property value
	 *
	 * @return	string
	 */
	public static function pAwards()
	{
		return self::getValue(self::$awards);
	}

	/**
	 * Return the 'birthDate' Property value
	 *
	 * @return	string
	 */
	public static function pBirthDate()
	{
		return self::getValue(self::$birthDate);
	}

	/**
	 * Return the 'brand' Property value
	 *
	 * @return	string
	 */
	public static function pBrand()
	{
		return self::getValue(self::$brand);
	}

	/**
	 * Return the 'children' Property value
	 *
	 * @return	string
	 */
	public static function pChildren()
	{
		return self::getValue(self::$children);
	}

	/**
	 * Return the 'colleague' Property value
	 *
	 * @return	string
	 */
	public static function pColleague()
	{
		return self::getValue(self::$colleague);
	}

	/**
	 * Return the 'colleagues' Property value
	 *
	 * @return	string
	 */
	public static function pColleagues()
	{
		return self::getValue(self::$colleagues);
	}

	/**
	 * Return the 'contactPoint' Property value
	 *
	 * @return	string
	 */
	public static function pContactPoint()
	{
		return self::getValue(self::$contactPoint);
	}

	/**
	 * Return the 'contactPoints' Property value
	 *
	 * @return	string
	 */
	public static function pContactPoints()
	{
		return self::getValue(self::$contactPoints);
	}

	/**
	 * Return the 'deathDate' Property value
	 *
	 * @return	string
	 */
	public static function pDeathDate()
	{
		return self::getValue(self::$deathDate);
	}

	/**
	 * Return the 'duns' Property value
	 *
	 * @return	string
	 */
	public static function pDuns()
	{
		return self::getValue(self::$duns);
	}

	/**
	 * Return the 'email' Property value
	 *
	 * @return	string
	 */
	public static function pEmail()
	{
		return self::getValue(self::$email);
	}

	/**
	 * Return the 'familyName' Property value
	 *
	 * @return	string
	 */
	public static function pFamilyName()
	{
		return self::getValue(self::$familyName);
	}

	/**
	 * Return the 'faxNumber' Property value
	 *
	 * @return	string
	 */
	public static function pFaxNumber()
	{
		return self::getValue(self::$faxNumber);
	}

	/**
	 * Return the 'follows' Property value
	 *
	 * @return	string
	 */
	public static function pFollows()
	{
		return self::getValue(self::$follows);
	}

	/**
	 * Return the 'gender' Property value
	 *
	 * @return	string
	 */
	public static function pGender()
	{
		return self::getValue(self::$gender);
	}

	/**
	 * Return the 'givenName' Property value
	 *
	 * @return	string
	 */
	public static function pGivenName()
	{
		return self::getValue(self::$givenName);
	}

	/**
	 * Return the 'globalLocationNumber' Property value
	 *
	 * @return	string
	 */
	public static function pGlobalLocationNumber()
	{
		return self::getValue(self::$globalLocationNumber);
	}

	/**
	 * Return the 'hasPOS' Property value
	 *
	 * @return	string
	 */
	public static function pHasPOS()
	{
		return self::getValue(self::$hasPOS);
	}

	/**
	 * Return the 'homeLocation' Property value
	 *
	 * @return	string
	 */
	public static function pHomeLocation()
	{
		return self::getValue(self::$homeLocation);
	}

	/**
	 * Return the 'honorificPrefix' Property value
	 *
	 * @return	string
	 */
	public static function pHonorificPrefix()
	{
		return self::getValue(self::$honorificPrefix);
	}

	/**
	 * Return the 'honorificSuffix' Property value
	 *
	 * @return	string
	 */
	public static function pHonorificSuffix()
	{
		return self::getValue(self::$honorificSuffix);
	}

	/**
	 * Return the 'interactionCount' Property value
	 *
	 * @return	string
	 */
	public static function pInteractionCount()
	{
		return self::getValue(self::$interactionCount);
	}

	/**
	 * Return the 'isicV4' Property value
	 *
	 * @return	string
	 */
	public static function pIsicV4()
	{
		return self::getValue(self::$isicV4);
	}

	/**
	 * Return the 'jobTitle' Property value
	 *
	 * @return	string
	 */
	public static function pJobTitle()
	{
		return self::getValue(self::$jobTitle);
	}

	/**
	 * Return the 'knows' Property value
	 *
	 * @return	string
	 */
	public static function pKnows()
	{
		return self::getValue(self::$knows);
	}

	/**
	 * Return the 'makesOffer' Property value
	 *
	 * @return	string
	 */
	public static function pMakesOffer()
	{
		return self::getValue(self::$makesOffer);
	}

	/**
	 * Return the 'memberOf' Property value
	 *
	 * @return	string
	 */
	public static function pMemberOf()
	{
		return self::getValue(self::$memberOf);
	}

	/**
	 * Return the 'naics' Property value
	 *
	 * @return	string
	 */
	public static function pNaics()
	{
		return self::getValue(self::$naics);
	}

	/**
	 * Return the 'nationality' Property value
	 *
	 * @return	string
	 */
	public static function pNationality()
	{
		return self::getValue(self::$nationality);
	}

	/**
	 * Return the 'owns' Property value
	 *
	 * @return	string
	 */
	public static function pOwns()
	{
		return self::getValue(self::$owns);
	}

	/**
	 * Return the 'parent' Property value
	 *
	 * @return	string
	 */
	public static function pParent()
	{
		return self::getValue(self::$parent);
	}

	/**
	 * Return the 'parents' Property value
	 *
	 * @return	string
	 */
	public static function pParents()
	{
		return self::getValue(self::$parents);
	}

	/**
	 * Return the 'performerIn' Property value
	 *
	 * @return	string
	 */
	public static function pPerformerIn()
	{
		return self::getValue(self::$performerIn);
	}

	/**
	 * Return the 'relatedTo' Property value
	 *
	 * @return	string
	 */
	public static function pRelatedTo()
	{
		return self::getValue(self::$relatedTo);
	}

	/**
	 * Return the 'seeks' Property value
	 *
	 * @return	string
	 */
	public static function pSeeks()
	{
		return self::getValue(self::$seeks);
	}

	/**
	 * Return the 'sibling' Property value
	 *
	 * @return	string
	 */
	public static function pSibling()
	{
		return self::getValue(self::$sibling);
	}

	/**
	 * Return the 'siblings' Property value
	 *
	 * @return	string
	 */
	public static function pSiblings()
	{
		return self::getValue(self::$siblings);
	}

	/**
	 * Return the 'spouse' Property value
	 *
	 * @return	string
	 */
	public static function pSpouse()
	{
		return self::getValue(self::$spouse);
	}

	/**
	 * Return the 'taxID' Property value
	 *
	 * @return	string
	 */
	public static function pTaxID()
	{
		return self::getValue(self::$taxID);
	}

	/**
	 * Return the 'telephone' Property value
	 *
	 * @return	string
	 */
	public static function pTelephone()
	{
		return self::getValue(self::$telephone);
	}

	/**
	 * Return the 'vatID' Property value
	 *
	 * @return	string
	 */
	public static function pVatID()
	{
		return self::getValue(self::$vatID);
	}

	/**
	 * Return the 'workLocation' Property value
	 *
	 * @return	string
	 */
	public static function pWorkLocation()
	{
		return self::getValue(self::$workLocation);
	}

	/**
	 * Return the 'worksFor' Property value
	 *
	 * @return	string
	 */
	public static function pWorksFor()
	{
		return self::getValue(self::$worksFor);
	}
}
