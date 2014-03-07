<?php
/**
 * A navigation element of the page.
 *
 * @see    http://schema.org/SiteNavigationElement
*/
abstract class TypeSiteNavigationElement extends TypeWebPageElement
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SiteNavigationElement';
}
