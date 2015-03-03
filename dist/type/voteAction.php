<?php
/**
 * The act of expressing a preference from a fixed/finite/structured set of choices/options.
 *
 * @see    http://schema.org/VoteAction
*/
abstract class TypeVoteAction extends TypeChooseAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/VoteAction';

	/**
	 * A sub property of object. The candidate subject of this action.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $candidate = array('value' => 'candidate',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'candidate' Property value
	 *
	 * @return	string
	 */
	public static function pCandidate()
	{
		return self::getValue(self::$candidate);
	}
}
