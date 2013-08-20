<?php
/**
 * A scholarly article.
 *
 * @see    http://schema.org/ScholarlyArticle
 * @since  1.0
*/
abstract class TypeScholarlyArticle extends TypeArticle
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ScholarlyArticle';
}
