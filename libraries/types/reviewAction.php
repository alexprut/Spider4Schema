<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * The act of producing a balanced opinion about the object for an audience. An agent reviews an object with participants resulting in a review.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ReviewAction
 * @since       13.1
*/
abstract class TypeReviewAction extends TypeAssessAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReviewAction';

	/**
	 * A sub property of result. The review that resulted in the performing of the action.
	 * Expected Type: Review
	 * 
	 * @var	array
	 */
	protected static $resultReview = array('value' => 'resultReview',
		'expectedTypes' => array('Review')
	);

	/**
	 * Return the 'resultReview' Property value
	 *
	 * @return	string
	 */
	public static function pResultReview()
	{
		return self::getValue(self::$resultReview);
	}
}
