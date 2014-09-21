<?php
/**
 * An agent approves/certifies/likes/supports/sanction an object.
 *
 * @see    http://schema.org/EndorseAction
*/
abstract class TypeEndorseAction extends TypeReactAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EndorseAction';

	/**
	 * A sub property of participant. The person/organization being supported.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $endorsee = array('value' => 'endorsee',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * Return the 'endorsee' Property value
	 *
	 * @return	string
	 */
	public static function pEndorsee()
	{
		return self::getValue(self::$endorsee);
	}
}
