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
 * The act of gaining ownership of an object from an origin. Reciprocal of GiveAction.Related actions:GiveAction: The reciprocal of TakeAction.ReceiveAction: Unlike ReceiveAction, TakeAction implies that ownership has been transfered.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/TakeAction
 * @since       13.1
*/
abstract class TypeTakeAction extends TypeTransferAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TakeAction';
}
