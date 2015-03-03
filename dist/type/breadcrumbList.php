<?php
/**
 * A BreadcrumbList is an ItemList consisting of a chain of linked Web pages, typically described using at least their URL and their name, ending with the current page.
 *
 * @see    http://schema.org/BreadcrumbList
*/
abstract class TypeBreadcrumbList extends TypeItemList
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BreadcrumbList';
}
