<?php
/**
 * An audio file.
 *
 * @see    http://schema.org/AudioObject
 * @since  1.0
*/
abstract class TypeAudioObject extends TypeMediaObject
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AudioObject';

	/**
	 * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $transcript = array('value' => 'transcript',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'transcript' Property value
	 *
	 * @return	string
	 */
	public static function pTranscript()
	{
		return self::getValue(self::$transcript);
	}
}
