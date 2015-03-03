<?php
/**
 * The act of managing by changing/editing the state of the object.
 *
 * @see    http://schema.org/UpdateAction
*/
abstract class TypeUpdateAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UpdateAction';

	/**
	 * A sub property of object. The collection target of the action.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $collection = array('value' => 'collection',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Return the 'collection' Property value
	 *
	 * @return	string
	 */
	public static function pCollection()
	{
		return self::getValue(self::$collection);
	}
}
