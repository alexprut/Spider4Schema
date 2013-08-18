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
 * The act of registering to an organization/service without the guarantee to receive it. NOTE(goto): should this be under InteractAction instead?Related actions:RegisterAction: Unlike RegisterAction, ApplyAction has no guarantees that the application will be accepted.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ApplyAction
 * @since       13.1
*/
abstract class TypeApplyAction extends TypeOrganizeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ApplyAction';
}
