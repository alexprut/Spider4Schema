<?php
/**
 * A brand is a name used by an organization or business person for labeling a product, product group, or similar.
 *
 * @see    http://schema.org/Brand
*/
abstract class TypeBrand extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Brand';

	/**
	 * An associated logo.
	 * Expected Type: ImageObject, URL
	 * 
	 * @var	array
	 */
	protected static $logo = array('value' => 'logo',
		'expectedTypes' => array('ImageObject', 'URL')
	);

	/**
	 * Return the 'logo' Property value
	 *
	 * @return	string
	 */
	public static function pLogo()
	{
		return self::getValue(self::$logo);
	}
}
