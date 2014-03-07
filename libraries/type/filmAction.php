<?php
/**
 * The act of capturing sound and moving images on film, video, or digitally.
 *
 * @see    http://schema.org/FilmAction
*/
abstract class TypeFilmAction extends TypeCreateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/FilmAction';
}
