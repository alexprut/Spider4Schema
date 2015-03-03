<?php
/**
 * An organization such as a school, NGO, corporation, club, etc.
 *
 * @see    http://schema.org/Organization
*/
abstract class TypeOrganization extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Organization';

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
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * Expected Type: AggregateRating
	 * 
	 * @var	array
	 */
	protected static $aggregateRating = array('value' => 'aggregateRating',
		'expectedTypes' => array('AggregateRating')
	);

	/**
	 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	 * Expected Type: Organization, Brand
	 * 
	 * @var	array
	 */
	protected static $brand = array('value' => 'brand',
		'expectedTypes' => array('Organization', 'Brand')
	);

	/**
	 * A contact point for a person or organization. Supersedes contactPoints.
	 * Expected Type: ContactPoint
	 * 
	 * @var	array
	 */
	protected static $contactPoint = array('value' => 'contactPoint',
		'expectedTypes' => array('ContactPoint')
	);

	/**
	 * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $department = array('value' => 'department',
		'expectedTypes' => array('Organization')
	);

	/**
	 * The date that this organization was dissolved.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $dissolutionDate = array('value' => 'dissolutionDate',
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
	 * Someone working for this organization. Supersedes employees.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $employee = array('value' => 'employee',
		'expectedTypes' => array('Person')
	);

	/**
	 * Upcoming or past event associated with this place, organization, or action. Supersedes events.
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $event = array('value' => 'event',
		'expectedTypes' => array('Event')
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
	 * A person who founded this organization. Supersedes founders.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $founder = array('value' => 'founder',
		'expectedTypes' => array('Person')
	);

	/**
	 * The date that this organization was founded.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $foundingDate = array('value' => 'foundingDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The place where the Organization was founded.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $foundingLocation = array('value' => 'foundingLocation',
		'expectedTypes' => array('Place')
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
	 * The official name of the organization, e.g. the registered company name.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $legalName = array('value' => 'legalName',
		'expectedTypes' => array('Text')
	);

	/**
	 * The location of the event, organization or action.
	 * Expected Type: PostalAddress, Place
	 * 
	 * @var	array
	 */
	protected static $location = array('value' => 'location',
		'expectedTypes' => array('PostalAddress', 'Place')
	);

	/**
	 * An associated logo.
	 * Expected Type: URL, ImageObject
	 * 
	 * @var	array
	 */
	protected static $logo = array('value' => 'logo',
		'expectedTypes' => array('URL', 'ImageObject')
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
	 * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals. Supersedes members, musicGroupMember. Inverse property: memberOf.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $member = array('value' => 'member',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * An Organization (or ProgramMembership) to which this Person or Organization belongs. Inverse property: member.
	 * Expected Type: Organization, ProgramMembership
	 * 
	 * @var	array
	 */
	protected static $memberOf = array('value' => 'memberOf',
		'expectedTypes' => array('Organization', 'ProgramMembership')
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
	 * Products owned by the organization or person.
	 * Expected Type: Product, OwnershipInfo
	 * 
	 * @var	array
	 */
	protected static $owns = array('value' => 'owns',
		'expectedTypes' => array('Product', 'OwnershipInfo')
	);

	/**
	 * A review of the item. Supersedes reviews.
	 * Expected Type: Review
	 * 
	 * @var	array
	 */
	protected static $review = array('value' => 'review',
		'expectedTypes' => array('Review')
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
	 * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $subOrganization = array('value' => 'subOrganization',
		'expectedTypes' => array('Organization')
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
	 * The Value-added Tax ID of the organization or person.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $vatID = array('value' => 'vatID',
		'expectedTypes' => array('Text')
	);

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
	 * Return the 'aggregateRating' Property value
	 *
	 * @return	string
	 */
	public static function pAggregateRating()
	{
		return self::getValue(self::$aggregateRating);
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
	 * Return the 'contactPoint' Property value
	 *
	 * @return	string
	 */
	public static function pContactPoint()
	{
		return self::getValue(self::$contactPoint);
	}

	/**
	 * Return the 'department' Property value
	 *
	 * @return	string
	 */
	public static function pDepartment()
	{
		return self::getValue(self::$department);
	}

	/**
	 * Return the 'dissolutionDate' Property value
	 *
	 * @return	string
	 */
	public static function pDissolutionDate()
	{
		return self::getValue(self::$dissolutionDate);
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
	 * Return the 'employee' Property value
	 *
	 * @return	string
	 */
	public static function pEmployee()
	{
		return self::getValue(self::$employee);
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
	 * Return the 'founder' Property value
	 *
	 * @return	string
	 */
	public static function pFounder()
	{
		return self::getValue(self::$founder);
	}

	/**
	 * Return the 'foundingDate' Property value
	 *
	 * @return	string
	 */
	public static function pFoundingDate()
	{
		return self::getValue(self::$foundingDate);
	}

	/**
	 * Return the 'foundingLocation' Property value
	 *
	 * @return	string
	 */
	public static function pFoundingLocation()
	{
		return self::getValue(self::$foundingLocation);
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
	 * Return the 'legalName' Property value
	 *
	 * @return	string
	 */
	public static function pLegalName()
	{
		return self::getValue(self::$legalName);
	}

	/**
	 * Return the 'location' Property value
	 *
	 * @return	string
	 */
	public static function pLocation()
	{
		return self::getValue(self::$location);
	}

	/**
	 * Return the 'logo' Property value
	 *
	 * @return	string
	 */
	public static function pLogo()
	{
		return self::getValue(self::$logo);
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
	 * Return the 'member' Property value
	 *
	 * @return	string
	 */
	public static function pMember()
	{
		return self::getValue(self::$member);
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
	 * Return the 'owns' Property value
	 *
	 * @return	string
	 */
	public static function pOwns()
	{
		return self::getValue(self::$owns);
	}

	/**
	 * Return the 'review' Property value
	 *
	 * @return	string
	 */
	public static function pReview()
	{
		return self::getValue(self::$review);
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
	 * Return the 'subOrganization' Property value
	 *
	 * @return	string
	 */
	public static function pSubOrganization()
	{
		return self::getValue(self::$subOrganization);
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
}
