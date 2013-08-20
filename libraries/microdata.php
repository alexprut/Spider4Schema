<?php
/**
 *
 */

/**
 * Joomla Platform class for interacting with Microdata semantics.
 *
 * @since  1.0
 */
class Microdata
{
	/**
	 * The Schema.org Type
	 * 
	 * @var		string
	 * @since	1.0
	 */
	protected $type;

	/**
	 * The Type classes name prefix
	 *
	 * @var		string
	 * @since	1.0
	 */
	protected $typePrefix = 'Type';

	/**
	 * The Property
	 * 
	 * @var		string
	 * @since	1.0
	 */
	protected $property = null;

	/**
	 * The Human value or Machine value
	 * 
	 * @var		string
	 * @since	1.0
	 */
	protected $content = '';

	/**
	 * Fallback Type
	 *
	 * @var		string
	 * @since	1.0
	 */
	protected $fallbackType = null;

	/**
	 * Fallback Property
	 *
	 * @var		string
	 * @since	1.0
	 */
	protected $fallbackProperty = null;

	/**
	 * Used to check if a Fallback must be used
	 *
	 * @var		string
	 * @since	1.0
	 */
	protected $fallback = false;

	/**
	 * Used to check if the Microdata semantics output are enabled or disabled
	 * 
	 * @var 	boolean
	 * @since	1.0
	 */
	protected $enabled = true;

	/**
	 * Initialize the class and setup the default Type
	 * 
	 * @param   string  $type  Optional, Fallback to Thing Type
	 */
	public function __construct($type = '')
	{
		// Fallback to Thing Type
		if (!$type)
		{
			$type = TypeThing::name();
		}

		$this->setType($type);
	}

	/**
	 * Enable or Disable Microdata semantics output
	 * 
	 * @param   boolean  $flag  Enable or disable
	 * 
	 * @return	object
	 */
	public function enable($flag = true)
	{
		$this->enabled = (boolean) $flag;

		return $this;
	}

	/**
	 * Set a new Schema.org Type
	 * 
	 * @param   string  $type  The Type to be setup
	 * 
	 * @return	object
	 */
	public function setType($type)
	{
		// Sanitize the Type
		$this->type = $this->sanitizeType($type);

		// If the given Type isn't available, fallback to Thing
		if ( !$this->isTypeAvailable($this->type) )
		{
			$this->type	= TypeThing::name();
		}

		return $this;
	}

	/**
	 * Return the current Type
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Setup a Property and a machine value if available
	 * 
	 * @param   string  $property  The Property
	 * 
	 * @return	object
	 */
	public function property($property)
	{
		// Sanitize the Property
		$property = $this->sanitizeProperty($property);

		// Control if the Property exist in the given Type and setup it, if not leave NULL
		if ( $this->isPropertyInType($this->type, $property) )
		{
			$this->property = $property;
		}
		else
		{
			$this->fallback = true;
		}

		return $this;
	}

	/**
	 * Return the property variable
	 * 
	 * @return	string
	 */
	public function getProperty()
	{
		return $this->property;
	}

	/**
	 * Setup a Text value or Content value for the Microdata
	 * 
	 * @param   string  $value  The human value or marchine value to be used
	 * 
	 * @return	object
	 */
	public function content($value)
	{
		$this->content = $value;

		return $this;
	}

	/**
	 * Return the content variable
	 * 
	 * @return	string
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * Setup a Fallback Type and Property
	 *
	 * @param   string  $type      The Fallback Type
	 * @param   string  $property  The Fallback Property
	 * 
	 * @return	object
	 */
	public function fallback($type, $property)
	{
		// Sanitize the Type
		$this->fallbackType = $this->sanitizeType($type);

		// If the given Type isn't available, fallback to Thing
		if (!$this->isTypeAvailable($this->fallbackType))
		{
			$this->fallbackType = TypeThing::name();
		}

		// Control if the Property exist in the given Type and setup it, if not leave NULL
		if ($this->isPropertyInType($this->fallbackType, $property))
		{
			$this->fallbackProperty = $property;
		}
		else
		{
			$this->fallbackProperty = null;
		}

		return $this;
	}

	/**
	 * Return the fallbackType variable
	 * 
	 * @return	string
	 */
	public function getFallbackType()
	{
		return $this->fallbackType;
	}

	/**
	 * Return the fallbackProperty variable
	 * 
	 * @return	string
	 */
	public function getFallbackProperty()
	{
		return $this->fallbackProperty;
	}

	/**
	 * This function handle the logic of a Microdata intelligent display.
	 * Check if the Type, Property are available, if not check for a Fallback,
	 * then reset all params for the next use and
	 * return the Microdata HTML 
	 * 
	 * @param   string  $displayType  Optional, 'inline', available ['inline'|'span'|'div'|meta]
	 * 
	 * @return	string
	 */
	public function display($displayType = '')
	{
		// Setup the type
		$type = $this->typePrefix . $this->type;

		// Initialize the HTML to output
		$html = $this->content;

		// Control if the Microdata output is enabled, otherwise return the content or empty string
		if (!$this->enabled)
		{
			return $html;
		}

		// If the property is wrong for the current Type check if Fallback available, otherwise return empty HTML
		if ($this->property && !$this->fallback)
		{
			// Process and return the HTML the way the user expects to
			if ($displayType)
			{
				switch ($displayType)
				{
					case 'span':
						$html = self::htmlSpan($this->content, $this->property);
						break;

					case 'div':
						$html = self::htmlDiv($this->content, $this->property);
						break;

					case 'meta':
						$html = self::htmlMeta($this->content, $this->property);
						break;

					default:
						// Default $displayType = 'inline'
						$html = self::htmlProperty($this->property);
						break;
				}
			}
			else
			{
				/* Process and return the HTML in an automatic way,
				 * with the Property expected Types an display the Microdata in the right way,
				 * check if the Property is nested or must be rendered in a metadata tag */
				switch (self::getExpectedDisplayType($type, $this->property))
				{
					case 'nested':
						// Retrive the expected nested Type of the Property
						$nestedType = $type::getExpectedTypes($this->property);
						$nestedType = $this->typePrefix . $nestedType[0];

						/* Check if a Content is available,
						 * otherwise Fallback to an 'inline' display type */
						if ($this->content)
						{
							$html = self::htmlSpan(
								$this->content,
								$this->property,
								$nestedType::scope(),
								true
							);
						}
						else
						{
							$html = self::htmlProperty($this->property)
								. " " . self::htmlScope($nestedType::scope());
						}
						break;

					case 'meta':
						/* Check if the Content value is available,
						 * otherwise Fallback to an 'inline' display Type */
						if ($this->content)
						{
							$html = self::htmlMeta($this->content, $this->property);
						}
						else
						{
							$html = self::htmlProperty($this->property);
						}
						break;

					default:
						/* Default expected display type = 'normal'
						 * Check if the Content value is available,
						 * otherwise Fallback to an 'inline' display Type */
						if ($this->content)
						{
							$html = self::htmlSpan($this->content, $this->property);
						}
						else
						{
							$html = self::htmlProperty($this->property);
						}
						break;
				}
			}
		}
		elseif ($this->fallbackProperty)
		{
			// Setup the type
			$type = $this->typePrefix . $this->fallbackType;

			// Process and return the HTML the way the user expects to
			if ($displayType)
			{
				switch ($displayType)
				{
					case 'span':
						$html = self::htmlSpan($this->content, $this->fallbackProperty, $type::scope());
						break;

					case 'div':
						$html = self::htmlDiv($this->content, $this->fallbackProperty, $type::scope());
						break;

					case 'meta':
						$html = self::htmlMeta($this->content, $this->fallbackProperty, $type::scope());
						break;

					default:
						// Default $displayType = 'inline'
						$html = self::htmlScope($type::scope())
							. ' ' . self::htmlProperty($this->fallbackProperty);
						break;
				}
			}
			else
			{
				/* Process and return the HTML in an automatic way,
				 * with the Property expected Types an display the Microdata in the right way,
				 * check if the Property is nested or must be rendered in a metadata tag */
				switch (self::getExpectedDisplayType($type, $this->fallbackProperty))
				{
					case 'meta':
						/* Check if the Content value is available,
						 * otherwise Fallback to an 'inline' display Type */
						if ($this->content)
						{
							$html = self::htmlMeta($this->content, $this->fallbackProperty, $type::scope());
						}
						else
						{
							$html = self::htmlScope($type::scope())
								. ' ' . self::htmlProperty($this->fallbackProperty);
						}
						break;

					default:
						/* Default expected display type = 'normal'
						 * Check if the Content value is available,
						 * otherwise Fallback to an 'inline' display Type */
						if ($this->content)
						{
							$html = self::htmlSpan($this->content, $this->fallbackProperty, $type::scope());
						}
						else
						{
							$html = self::htmlScope($type::scope())
								. ' ' . self::htmlProperty($this->fallbackProperty);
						}
						break;
				}
			}
		}

		// Reset params
		$this->content			= '';
		$this->property			= null;
		$this->fallbackProperty	= null;
		$this->fallbackType		= null;
		$this->fallback			= false;

		return $html;
	}

	/**
	 * Return the HTML of the current Scope
	 *
	 * @return	string
	 */
	public function displayScope()
	{
		$type = $this->typePrefix . $this->type;

		// Control if the Microdata output is enabled, otherwise return the content or empty string
		if (!$this->enabled)
		{
			return '';
		}

		return self::htmlScope($type::scope());
	}

	/**
	 * Return the sanitized Type
	 *
	 * @param   string  $type  The Type to sanitize
	 *
	 * @return	string
	 */
	public function sanitizeType($type)
	{
		return ucfirst(trim($type));
	}

	/**
	 * Return the sanitized Property
	 *
	 * @param   string  $property  The Property to sanitize
	 *
	 * @return	string
	 */
	public function sanitizeProperty($property)
	{
		return lcfirst(trim($property));
	}

	/**
	 * Return an array with all available Types
	 * 
	 * @return	array
	 */
	public static function getTypes()
	{
		// Get all available Types
		$tmpTypes = scandir(__DIR__ . '/type');
		$types = array();

		foreach ($tmpTypes as $type)
		{
			if (strpos($type, '.php'))
			{
				$type = substr($type, 0, strpos($type, '.php'));
				array_push($types, ucfirst($type));
			}
		}

		return $types;
	}

	/**
	 * Return the expected display type of the [normal|nested|meta]
	 * In wich way to display the Property:
	 * normal -> itemprop="name"
	 * nested -> itemprop="director" itemscope itemtype="http://schema.org/Person"
	 * meta   -> <meta itemprop="datePublished" content="1991-05-01">
	 *
	 * @param   string  $type      The Type where to find the Property
	 * @param   string  $property  The Property to process
	 *
	 * @return  string
	 */
	protected function getExpectedDisplayType($type, $property)
	{
		// Sanitize the given Type
		if (strpos($type, $this->typePrefix) === false)
		{
			$type = $this->typePrefix . $type;
		}

		// FIXME If the user want to use one of the expected Types, not the first Type found
		$expectedTypes = $type::getExpectedTypes($property);

		// Retrieve the first expected type
		$type = $expectedTypes[0];

		// Check if it's a normal display
		if ($type === 'Text' || $type === 'URL' || $type === 'Boolean' || $type === 'Number')
		{
			return 'normal';
		}

		// Check if it's a meta display
		if ($type === 'Date' || $type === 'DateTime')
		{
			return 'meta';
		}

		// Otherwise it's a nested display
		return 'nested';
	}

	/**
	 * Control if the given Type has the given Property
	 * 
	 * @param   string  $type      The Type where to check
	 * @param   string  $property  The Property to check
	 * 
	 * @return	boolean
	 */
	public function isPropertyInType($type, $property)
	{
		// Sanitize the Type for the function use
		if (stripos($type, $this->typePrefix) !== 0)
		{
			$type = $this->typePrefix . $type;
		}

		// Control if the Property exists
		return ( in_array($property, $type::getProperties()) ) ? true : false;
	}

	/**
	 * Control if the given Type class is available
	 * 
	 * @param   string  $type  The Type to check
	 * 
	 * @return	boolean
	 */
	public function isTypeAvailable($type)
	{
		// Sanitize the Type for the function use
		if (stripos($type, $this->typePrefix) === 0)
		{
			$type = substr($type, strlen($this->typePrefix));
		}

		// Get all files from the current directory and see if the Type file is available
		$dir = scandir(__DIR__ . '/type');

		return ( in_array(lcfirst($type) . '.php', $dir) ) ? true : false;
	}

	/**
	 * Return the microdata in a <meta> tag with the machine content inside.
	 *
	 * @param   string   $content   The machine content to display
	 * @param   string   $property  The Property
	 * @param   string   $scope     Optional, the Type scope to display
	 * @param   boolean  $inverse   Optional, default = false, inverse the $scope with the $property
	 *
	 * @return	string
	 *
	 * @since	1.0
	 */
	public static function htmlMeta($content, $property, $scope = '', $inverse = false)
	{
		// Control if the Property has allready the itemprop
		if (stripos($property, 'itemprop') !== 0)
		{
			$property = self::htmlProperty($property);
		}

		// Control if the Scope have allready the itemtype
		if (!empty($scope) && stripos($scope, 'itemscope') !== 0)
		{
			$scope = self::htmlScope($scope);
		}

		if ($inverse)
		{
			$tmp = join(' ', array($property, $scope));
		}
		else
		{
			$tmp = join(' ', array($scope, $property));
		}

		$tmp = trim($tmp);

		return "<meta $tmp content='$content'/>";
	}

	/**
	 * Return the microdata in an <span> tag.
	 *
	 * @param   string   $content   The human value
	 * @param   string   $property  Optional, the human value to display
	 * @param   string   $scope     Optional, the Type scope to display
	 * @param   boolean  $inverse   Optional, default = false, inverse the $scope with the $property
	 * 
	 * @return	string
	 *
	 * @since	1.0
	 */
	public static function htmlSpan($content, $property = '', $scope = '', $inverse = false)
	{
		// Control if the Property has allready the itemprop
		if (!empty($property) && stripos($property, 'itemprop') !== 0)
		{
			$property = self::htmlProperty($property);
		}

		// Control if the Scope have allready the itemtype
		if (!empty($scope) && stripos($scope, 'itemscope') !== 0)
		{
			$scope = self::htmlScope($scope);
		}

		if ($inverse)
		{
			$tmp = join(' ', array($property, $scope));
		}
		else
		{
			$tmp = join(' ', array($scope, $property));
		}

		$tmp = trim($tmp);
		$tmp = ($tmp) ? ' ' . $tmp : '';

		return "<span$tmp>$content</span>";
	}

	/**
	 * Return the microdata in an <div> tag.
	 *
	 * @param   string   $content   The human value
	 * @param   string   $property  Optional, the human value to display
	 * @param   string   $scope     Optional, the Type scope to display
	 * @param   boolean  $inverse   Optional, default = false, inverse the $scope with the $property
	 * 
	 * @return	string
	 *
	 * @since	1.0
	 */
	public static function htmlDiv($content, $property = '', $scope = '', $inverse = false)
	{
		// Control if the Property has allready the itemprop
		if (!empty($property) && stripos($property, 'itemprop') !== 0)
		{
			$property = self::htmlProperty($property);
		}

		// Control if the Scope have allready the itemtype
		if (!empty($scope) && stripos($scope, 'itemscope') !== 0)
		{
			$scope = self::htmlScope($scope);
		}

		if ($inverse)
		{
			$tmp = join(' ', array($property, $scope));
		}
		else
		{
			$tmp = join(' ', array($scope, $property));
		}

		$tmp = trim($tmp);
		$tmp = ($tmp) ? ' ' . $tmp : '';

		return "<div$tmp>$content</div>";
	}

	/**
	 * Return the HTML Scope
	 *
	 * @param   string  $scope  The Scope to process
	 *
	 * @return  string
	 */
	public static function htmlScope($scope)
	{
		if (stripos($scope, 'http') !== 0)
		{
			$scope = 'https://schema.org/' . ucfirst($scope);
		}

		return "itemscope itemtype='$scope'";
	}

	/**
	* Return the HTML Property
	*
	* @param   string  $property  The Property to process
	*
	* @return  string
	*/
	public static function htmlProperty($property)
	{
		return "itemprop='$property'";
	}
}
