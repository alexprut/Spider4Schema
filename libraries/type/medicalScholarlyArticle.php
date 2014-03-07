<?php
/**
 * A scholarly article in the medical domain.
 *
 * @see    http://schema.org/MedicalScholarlyArticle
*/
abstract class TypeMedicalScholarlyArticle extends TypeScholarlyArticle
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalScholarlyArticle';

	/**
	 * The type of the medical article, taken from the US NLM MeSH publication type catalog.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $publicationType = array('value' => 'publicationType',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'publicationType' Property value
	 *
	 * @return	string
	 */
	public static function pPublicationType()
	{
		return self::getValue(self::$publicationType);
	}
}
