<?php
/**
 * The act of participating in performance arts.
 *
 * @see    http://schema.org/PerformAction
*/
abstract class TypePerformAction extends TypePlayAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PerformAction';

	/**
	 * A sub property of location. The entertainment business where the action occurred.
	 * Expected Type: EntertainmentBusiness
	 * 
	 * @var	array
	 */
	protected static $entertainmentBusiness = array('value' => 'entertainmentBusiness',
		'expectedTypes' => array('EntertainmentBusiness')
	);

	/**
	 * Return the 'entertainmentBusiness' Property value
	 *
	 * @return	string
	 */
	public static function pEntertainmentBusiness()
	{
		return self::getValue(self::$entertainmentBusiness);
	}
}
