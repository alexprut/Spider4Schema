<?php
/**
 * The act of authoring written creative content.
 *
 * @see    http://schema.org/WriteAction
 * @since  1.0
*/
abstract class TypeWriteAction extends TypeCreateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WriteAction';

	/**
	 * A sub property of instrument. The languaged used on this action.
	 * Expected Type: Language
	 * 
	 * @var	array
	 */
	protected static $language = array('value' => 'language',
		'expectedTypes' => array('Language')
	);

	/**
	 * Return the 'language' Property value
	 *
	 * @return	string
	 */
	public static function pLanguage()
	{
		return self::getValue(self::$language);
	}
}
