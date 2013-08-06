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
 * Web page type: Image gallery page.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ImageGallery
 * @since       13.1
*/
abstract class TypeImageGallery extends TypeCollectionPage
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ImageGallery';
}