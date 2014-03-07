<?php
/**
 * Intended audience for an item, i.e. the group for whom the item was created.
 *
 * @see    http://schema.org/Audience
*/
abstract class TypeAudience extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Audience';

	/**
	 * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.)
      domain: Audience
      Range: Text
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $audienceType = array('value' => 'audienceType',
		'expectedTypes' => array('Text')
	);

	/**
	 * The geographic area associated with the audience.
	 * Expected Type: AdministrativeArea
	 * 
	 * @var	array
	 */
	protected static $geographicArea = array('value' => 'geographicArea',
		'expectedTypes' => array('AdministrativeArea')
	);

	/**
	 * Return the 'audienceType' Property value
	 *
	 * @return	string
	 */
	public static function pAudienceType()
	{
		return self::getValue(self::$audienceType);
	}

	/**
	 * Return the 'geographicArea' Property value
	 *
	 * @return	string
	 */
	public static function pGeographicArea()
	{
		return self::getValue(self::$geographicArea);
	}
}
