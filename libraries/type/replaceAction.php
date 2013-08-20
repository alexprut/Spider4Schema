<?php
/**
 * The act of editing a recipient by replacing an old object with a new object.
 *
 * @see    http://schema.org/ReplaceAction
 * @since  1.0
*/
abstract class TypeReplaceAction extends TypeUpdateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReplaceAction';

	/**
	 * A sub property of object. The object that is being replaced.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $replacee = array('value' => 'replacee',
		'expectedTypes' => array('Thing')
	);

	/**
	 * A sub property of object. The object that replaces.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $replacer = array('value' => 'replacer',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Return the 'replacee' Property value
	 *
	 * @return	string
	 */
	public static function pReplacee()
	{
		return self::getValue(self::$replacee);
	}

	/**
	 * Return the 'replacer' Property value
	 *
	 * @return	string
	 */
	public static function pReplacer()
	{
		return self::getValue(self::$replacer);
	}
}
