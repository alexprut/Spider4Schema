<?php
/**
 * The act of expressing a preference from a set of options or a large or unbounded set of choices/options.
 *
 * @see    http://schema.org/ChooseAction
*/
abstract class TypeChooseAction extends TypeAssessAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ChooseAction';

	/**
	 * A sub property of object. The options subject to this action.
	 * Expected Type: Text, Thing
	 * 
	 * @var	array
	 */
	protected static $option = array('value' => 'option',
		'expectedTypes' => array('Text', 'Thing')
	);

	/**
	 * Return the 'option' Property value
	 *
	 * @return	string
	 */
	public static function pOption()
	{
		return self::getValue(self::$option);
	}
}
