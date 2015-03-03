<?php
/**
 * A musical composition.
 *
 * @see    http://schema.org/MusicComposition
*/
abstract class TypeMusicComposition extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicComposition';

	/**
	 * The person or organization who wrote the composition.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $composer = array('value' => 'composer',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The date and place the work was first performed.
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $firstPerformance = array('value' => 'firstPerformance',
		'expectedTypes' => array('Event')
	);

	/**
	 * Smaller compositions included in this work (e.g. a movement in a symphony).
	 * Expected Type: MusicComposition
	 * 
	 * @var	array
	 */
	protected static $includedComposition = array('value' => 'includedComposition',
		'expectedTypes' => array('MusicComposition')
	);

	/**
	 * The International Standard Musical Work Code for the composition.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $iswcCode = array('value' => 'iswcCode',
		'expectedTypes' => array('Text')
	);

	/**
	 * The person who wrote the words.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $lyricist = array('value' => 'lyricist',
		'expectedTypes' => array('Person')
	);

	/**
	 * An arrangement derived from the composition.
	 * Expected Type: MusicComposition
	 * 
	 * @var	array
	 */
	protected static $musicArrangement = array('value' => 'musicArrangement',
		'expectedTypes' => array('MusicComposition')
	);

	/**
	 * The type of composition (e.g. overture, sonata, symphony, etc.).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $musicCompositionForm = array('value' => 'musicCompositionForm',
		'expectedTypes' => array('Text')
	);

	/**
	 * The key, mode, or scale this composition uses.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $musicalKey = array('value' => 'musicalKey',
		'expectedTypes' => array('Text')
	);

	/**
	 * An audio recording of the work. Inverse property: recordingOf.
	 * Expected Type: MusicRecording
	 * 
	 * @var	array
	 */
	protected static $recordedAs = array('value' => 'recordedAs',
		'expectedTypes' => array('MusicRecording')
	);

	/**
	 * Return the 'composer' Property value
	 *
	 * @return	string
	 */
	public static function pComposer()
	{
		return self::getValue(self::$composer);
	}

	/**
	 * Return the 'firstPerformance' Property value
	 *
	 * @return	string
	 */
	public static function pFirstPerformance()
	{
		return self::getValue(self::$firstPerformance);
	}

	/**
	 * Return the 'includedComposition' Property value
	 *
	 * @return	string
	 */
	public static function pIncludedComposition()
	{
		return self::getValue(self::$includedComposition);
	}

	/**
	 * Return the 'iswcCode' Property value
	 *
	 * @return	string
	 */
	public static function pIswcCode()
	{
		return self::getValue(self::$iswcCode);
	}

	/**
	 * Return the 'lyricist' Property value
	 *
	 * @return	string
	 */
	public static function pLyricist()
	{
		return self::getValue(self::$lyricist);
	}

	/**
	 * Return the 'musicArrangement' Property value
	 *
	 * @return	string
	 */
	public static function pMusicArrangement()
	{
		return self::getValue(self::$musicArrangement);
	}

	/**
	 * Return the 'musicCompositionForm' Property value
	 *
	 * @return	string
	 */
	public static function pMusicCompositionForm()
	{
		return self::getValue(self::$musicCompositionForm);
	}

	/**
	 * Return the 'musicalKey' Property value
	 *
	 * @return	string
	 */
	public static function pMusicalKey()
	{
		return self::getValue(self::$musicalKey);
	}

	/**
	 * Return the 'recordedAs' Property value
	 *
	 * @return	string
	 */
	public static function pRecordedAs()
	{
		return self::getValue(self::$recordedAs);
	}
}
