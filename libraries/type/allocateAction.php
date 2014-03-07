<?php
/**
 * The act of organizing tasks/objects/events by associating resources to it.
 *
 * @see    http://schema.org/AllocateAction
*/
abstract class TypeAllocateAction extends TypeOrganizeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AllocateAction';

	/**
	 * A goal towards an action is taken. Can be concrete or abstract.
	 * Expected Type: MedicalDevicePurpose, Thing
	 * 
	 * @var	array
	 */
	protected static $purpose = array('value' => 'purpose',
		'expectedTypes' => array('MedicalDevicePurpose', 'Thing')
	);

	/**
	 * Return the 'purpose' Property value
	 *
	 * @return	string
	 */
	public static function pPurpose()
	{
		return self::getValue(self::$purpose);
	}
}
