<?php
/**
 *
 *
 */
class Types
{
	/**
	 * An array with all available Types and information
	 *
	 * @var	array
	 */
	protected $types = array(
		'DataType' => array(
			'extends' => '',
			'properties' => array()
		),
		'Boolean' => array(
			'extends' => 'DataType',
			'properties' => array()
		),
		'Date' => array(
			'extends' => 'DataType',
			'properties' => array()
		),
		'DateTime' => array(
			'extends' => 'DataType',
			'properties' => array()
		),
		'Number' => array(
			'extends' => 'DataType',
			'properties' => array()
		),
		'Float' => array(
			'extends' => 'Number',
			'properties' => array()
		),
		'Integer' => array(
			'extends' => 'Number',
			'properties' => array()
		),
		'Text' => array(
			'extends' => 'DataType',
			'properties' => array()
		),
		'URL' => array(
			'extends' => 'Text',
			'properties' => array()
		),
		'Time' => array(
			'extends' => 'DataType',
			'properties' => array()
		),
		'Thing' => array(
			'extends' => '',
			'properties' => array(
				'additionalType' => array(
					'expectedTypes' => array('URL')
				),
				'description' => array(
					'expectedTypes' => array('Text')
				),
				'image' => array(
					'expectedTypes' => array('URL')
				),
				'name' => array(
					'expectedTypes' => array('Text')
				),
				'sameAs' => array(
					'expectedTypes' => array('URL')
				),
				'url' => array(
					'expectedTypes' => array('URL')
				)
			)
		),
		'Class' => array(
			'extends' => 'Thing',
			'properties' => array()
		),
		'CreativeWork' => array(
			'extends' => 'Thing',
			'properties' => array(
				'about' => array(
					'expectedTypes' => array('Thing')
				),
				'accountablePerson' => array(
					'expectedTypes' => array('Person')
				),
				'aggregateRating' => array(
					'expectedTypes' => array('AggregateRating')
				),
				'alternativeHeadline' => array(
					'expectedTypes' => array('Text')
				),
				'associatedMedia' => array(
					'expectedTypes' => array('MediaObject')
				),
				'audience' => array(
					'expectedTypes' => array('Audience')
				),
				'audio' => array(
					'expectedTypes' => array('AudioObject')
				),
				'author' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'award' => array(
					'expectedTypes' => array('Text')
				),
				'awards' => array(
					'expectedTypes' => array('Text')
				),
				'citation' => array(
					'expectedTypes' => array('CreativeWork', 'Text')
				),
				'comment' => array(
					'expectedTypes' => array('UserComments')
				),
				'contentLocation' => array(
					'expectedTypes' => array('Place')
				),
				'contentRating' => array(
					'expectedTypes' => array('Text')
				),
				'contributor' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'copyrightHolder' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'copyrightYear' => array(
					'expectedTypes' => array('Number')
				),
				'creator' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'dateCreated' => array(
					'expectedTypes' => array('Date')
				),
				'dateModified' => array(
					'expectedTypes' => array('Date')
				),
				'datePublished' => array(
					'expectedTypes' => array('Date')
				),
				'discussionUrl' => array(
					'expectedTypes' => array('URL')
				),
				'editor' => array(
					'expectedTypes' => array('Person')
				),
				'educationalAlignment' => array(
					'expectedTypes' => array('AlignmentObject')
				),
				'educationalUse' => array(
					'expectedTypes' => array('Text')
				),
				'encoding' => array(
					'expectedTypes' => array('MediaObject')
				),
				'encodings' => array(
					'expectedTypes' => array('MediaObject')
				),
				'genre' => array(
					'expectedTypes' => array('Text')
				),
				'headline' => array(
					'expectedTypes' => array('Text')
				),
				'inLanguage' => array(
					'expectedTypes' => array('Text')
				),
				'interactionCount' => array(
					'expectedTypes' => array('Text')
				),
				'interactivityType' => array(
					'expectedTypes' => array('Text')
				),
				'isBasedOnUrl' => array(
					'expectedTypes' => array('URL')
				),
				'isFamilyFriendly' => array(
					'expectedTypes' => array('Boolean')
				),
				'keywords' => array(
					'expectedTypes' => array('Text')
				),
				'learningResourceType' => array(
					'expectedTypes' => array('Text')
				),
				'mentions' => array(
					'expectedTypes' => array('Thing')
				),
				'offers' => array(
					'expectedTypes' => array('Offer')
				),
				'provider' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'publisher' => array(
					'expectedTypes' => array('Organization')
				),
				'publishingPrinciples' => array(
					'expectedTypes' => array('URL')
				),
				'review' => array(
					'expectedTypes' => array('Review')
				),
				'reviews' => array(
					'expectedTypes' => array('Review')
				),
				'sourceOrganization' => array(
					'expectedTypes' => array('Organization')
				),
				'text' => array(
					'expectedTypes' => array('Text')
				),
				'thumbnailUrl' => array(
					'expectedTypes' => array('URL')
				),
				'timeRequired' => array(
					'expectedTypes' => array('Duration')
				),
				'typicalAgeRange' => array(
					'expectedTypes' => array('Text')
				),
				'version' => array(
					'expectedTypes' => array('Number')
				),
				'video' => array(
					'expectedTypes' => array('VideoObject')
				)
			)
		),
		'Article' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'articleBody' => array(
					'expectedTypes' => array('Text')
				),
				'articleSection' => array(
					'expectedTypes' => array('Text')
				),
				'wordCount' => array(
					'expectedTypes' => array('Integer')
				)
			)
		),
		'BlogPosting' => array(
			'extends' => 'Article',
			'properties' => array()
		),
		'NewsArticle' => array(
			'extends' => 'Article',
			'properties' => array(
				'dateline' => array(
					'expectedTypes' => array('Text')
				),
				'printColumn' => array(
					'expectedTypes' => array('Text')
				),
				'printEdition' => array(
					'expectedTypes' => array('Text')
				),
				'printPage' => array(
					'expectedTypes' => array('Text')
				),
				'printSection' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'ScholarlyArticle' => array(
			'extends' => 'Article',
			'properties' => array()
		),
		'MedicalScholarlyArticle' => array(
			'extends' => 'ScholarlyArticle',
			'properties' => array(
				'publicationType' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'TechArticle' => array(
			'extends' => 'Article',
			'properties' => array(
				'dependencies' => array(
					'expectedTypes' => array('Text')
				),
				'proficiencyLevel' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'APIReference' => array(
			'extends' => 'TechArticle',
			'properties' => array(
				'assembly' => array(
					'expectedTypes' => array('Text')
				),
				'assemblyVersion' => array(
					'expectedTypes' => array('Text')
				),
				'programmingModel' => array(
					'expectedTypes' => array('Text')
				),
				'targetPlatform' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'Blog' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'blogPost' => array(
					'expectedTypes' => array('BlogPosting')
				),
				'blogPosts' => array(
					'expectedTypes' => array('BlogPosting')
				)
			)
		),
		'Book' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'bookEdition' => array(
					'expectedTypes' => array('Text')
				),
				'bookFormat' => array(
					'expectedTypes' => array('BookFormatType')
				),
				'illustrator' => array(
					'expectedTypes' => array('Person')
				),
				'isbn' => array(
					'expectedTypes' => array('Text')
				),
				'numberOfPages' => array(
					'expectedTypes' => array('Integer')
				)
			)
		),
		'Code' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'codeRepository' => array(
					'expectedTypes' => array('URL')
				),
				'programmingLanguage' => array(
					'expectedTypes' => array('Thing')
				),
				'runtime' => array(
					'expectedTypes' => array('Text')
				),
				'sampleType' => array(
					'expectedTypes' => array('Text')
				),
				'targetProduct' => array(
					'expectedTypes' => array('SoftwareApplication')
				)
			)
		),
		'Comment' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'DataCatalog' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'dataset' => array(
					'expectedTypes' => array('Dataset')
				)
			)
		),
		'Dataset' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'catalog' => array(
					'expectedTypes' => array('DataCatalog')
				),
				'distribution' => array(
					'expectedTypes' => array('DataDownload')
				),
				'spatial' => array(
					'expectedTypes' => array('Place')
				),
				'temporal' => array(
					'expectedTypes' => array('DateTime')
				)
			)
		),
		'Diet' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'dietFeatures' => array(
					'expectedTypes' => array('Text')
				),
				'endorsers' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'expertConsiderations' => array(
					'expectedTypes' => array('Text')
				),
				'overview' => array(
					'expectedTypes' => array('Text')
				),
				'physiologicalBenefits' => array(
					'expectedTypes' => array('Text')
				),
				'proprietaryName' => array(
					'expectedTypes' => array('Text')
				),
				'risks' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'ExercisePlan' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'activityDuration' => array(
					'expectedTypes' => array('Duration')
				),
				'activityFrequency' => array(
					'expectedTypes' => array('Text')
				),
				'additionalVariable' => array(
					'expectedTypes' => array('Text')
				),
				'exerciseType' => array(
					'expectedTypes' => array('Text')
				),
				'intensity' => array(
					'expectedTypes' => array('Text')
				),
				'repetitions' => array(
					'expectedTypes' => array('Number')
				),
				'restPeriods' => array(
					'expectedTypes' => array('Text')
				),
				'workload' => array(
					'expectedTypes' => array('Energy')
				)
			)
		),
		'ItemList' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'itemListElement' => array(
					'expectedTypes' => array('Text')
				),
				'itemListOrder' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'Map' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'MediaObject' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'associatedArticle' => array(
					'expectedTypes' => array('NewsArticle')
				),
				'bitrate' => array(
					'expectedTypes' => array('Text')
				),
				'contentSize' => array(
					'expectedTypes' => array('Text')
				),
				'contentUrl' => array(
					'expectedTypes' => array('URL')
				),
				'duration' => array(
					'expectedTypes' => array('Duration')
				),
				'embedUrl' => array(
					'expectedTypes' => array('URL')
				),
				'encodesCreativeWork' => array(
					'expectedTypes' => array('CreativeWork')
				),
				'encodingFormat' => array(
					'expectedTypes' => array('Text')
				),
				'expires' => array(
					'expectedTypes' => array('Date')
				),
				'height' => array(
					'expectedTypes' => array('Distance', 'QuantitativeValue')
				),
				'playerType' => array(
					'expectedTypes' => array('Text')
				),
				'regionsAllowed' => array(
					'expectedTypes' => array('Place')
				),
				'requiresSubscription' => array(
					'expectedTypes' => array('Boolean')
				),
				'uploadDate' => array(
					'expectedTypes' => array('Date')
				),
				'width' => array(
					'expectedTypes' => array('Distance', 'QuantitativeValue')
				)
			)
		),
		'AudioObject' => array(
			'extends' => 'MediaObject',
			'properties' => array(
				'transcript' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'DataDownload' => array(
			'extends' => 'MediaObject',
			'properties' => array()
		),
		'ImageObject' => array(
			'extends' => 'MediaObject',
			'properties' => array(
				'caption' => array(
					'expectedTypes' => array('Text')
				),
				'exifData' => array(
					'expectedTypes' => array('Text')
				),
				'representativeOfPage' => array(
					'expectedTypes' => array('Boolean')
				),
				'thumbnail' => array(
					'expectedTypes' => array('ImageObject')
				)
			)
		),
		'MusicVideoObject' => array(
			'extends' => 'MediaObject',
			'properties' => array()
		),
		'VideoObject' => array(
			'extends' => 'MediaObject',
			'properties' => array(
				'caption' => array(
					'expectedTypes' => array('Text')
				),
				'productionCompany' => array(
					'expectedTypes' => array('Organization')
				),
				'thumbnail' => array(
					'expectedTypes' => array('ImageObject')
				),
				'transcript' => array(
					'expectedTypes' => array('Text')
				),
				'videoFrameSize' => array(
					'expectedTypes' => array('Text')
				),
				'videoQuality' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'Movie' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'actor' => array(
					'expectedTypes' => array('Person')
				),
				'actors' => array(
					'expectedTypes' => array('Person')
				),
				'director' => array(
					'expectedTypes' => array('Person')
				),
				'duration' => array(
					'expectedTypes' => array('Duration')
				),
				'musicBy' => array(
					'expectedTypes' => array('MusicGroup', 'Person')
				),
				'producer' => array(
					'expectedTypes' => array('Person')
				),
				'productionCompany' => array(
					'expectedTypes' => array('Organization')
				),
				'trailer' => array(
					'expectedTypes' => array('VideoObject')
				)
			)
		),
		'MusicPlaylist' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'numTracks' => array(
					'expectedTypes' => array('Integer')
				),
				'track' => array(
					'expectedTypes' => array('MusicRecording')
				),
				'tracks' => array(
					'expectedTypes' => array('MusicRecording')
				)
			)
		),
		'MusicAlbum' => array(
			'extends' => 'MusicPlaylist',
			'properties' => array(
				'byArtist' => array(
					'expectedTypes' => array('MusicGroup')
				)
			)
		),
		'MusicRecording' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'byArtist' => array(
					'expectedTypes' => array('MusicGroup')
				),
				'duration' => array(
					'expectedTypes' => array('Duration')
				),
				'inAlbum' => array(
					'expectedTypes' => array('MusicAlbum')
				),
				'inPlaylist' => array(
					'expectedTypes' => array('MusicPlaylist')
				)
			)
		),
		'Painting' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'Photograph' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'Recipe' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'cookingMethod' => array(
					'expectedTypes' => array('Text')
				),
				'cookTime' => array(
					'expectedTypes' => array('Duration')
				),
				'ingredients' => array(
					'expectedTypes' => array('Text')
				),
				'nutrition' => array(
					'expectedTypes' => array('NutritionInformation')
				),
				'prepTime' => array(
					'expectedTypes' => array('Duration')
				),
				'recipeCategory' => array(
					'expectedTypes' => array('Text')
				),
				'recipeCuisine' => array(
					'expectedTypes' => array('Text')
				),
				'recipeInstructions' => array(
					'expectedTypes' => array('Text')
				),
				'recipeYield' => array(
					'expectedTypes' => array('Text')
				),
				'totalTime' => array(
					'expectedTypes' => array('Duration')
				)
			)
		),
		'Review' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'itemReviewed' => array(
					'expectedTypes' => array('Thing')
				),
				'reviewBody' => array(
					'expectedTypes' => array('Text')
				),
				'reviewRating' => array(
					'expectedTypes' => array('Rating')
				)
			)
		),
		'Sculpture' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'SoftwareApplication' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'applicationCategory' => array(
					'expectedTypes' => array('Text', 'URL')
				),
				'applicationSubCategory' => array(
					'expectedTypes' => array('Text', 'URL')
				),
				'applicationSuite' => array(
					'expectedTypes' => array('Text')
				),
				'countriesNotSupported' => array(
					'expectedTypes' => array('Text')
				),
				'countriesSupported' => array(
					'expectedTypes' => array('Text')
				),
				'device' => array(
					'expectedTypes' => array('Text')
				),
				'downloadUrl' => array(
					'expectedTypes' => array('URL')
				),
				'featureList' => array(
					'expectedTypes' => array('Text', 'URL')
				),
				'fileFormat' => array(
					'expectedTypes' => array('Text')
				),
				'fileSize' => array(
					'expectedTypes' => array('Integer')
				),
				'installUrl' => array(
					'expectedTypes' => array('URL')
				),
				'memoryRequirements' => array(
					'expectedTypes' => array('Text', 'URL')
				),
				'operatingSystem' => array(
					'expectedTypes' => array('Text')
				),
				'permissions' => array(
					'expectedTypes' => array('Text')
				),
				'processorRequirements' => array(
					'expectedTypes' => array('Text')
				),
				'releaseNotes' => array(
					'expectedTypes' => array('Text', 'URL')
				),
				'requirements' => array(
					'expectedTypes' => array('Text', 'URL')
				),
				'screenshot' => array(
					'expectedTypes' => array('ImageObject', 'URL')
				),
				'softwareVersion' => array(
					'expectedTypes' => array('Text')
				),
				'storageRequirements' => array(
					'expectedTypes' => array('Text', 'URL')
				)
			)
		),
		'MobileApplication' => array(
			'extends' => 'SoftwareApplication',
			'properties' => array(
				'carrierRequirements' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'WebApplication' => array(
			'extends' => 'SoftwareApplication',
			'properties' => array(
				'browserRequirements' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'TVEpisode' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'actor' => array(
					'expectedTypes' => array('Person')
				),
				'actors' => array(
					'expectedTypes' => array('Person')
				),
				'director' => array(
					'expectedTypes' => array('Person')
				),
				'episodeNumber' => array(
					'expectedTypes' => array('Number')
				),
				'musicBy' => array(
					'expectedTypes' => array('MusicGroup', 'Person')
				),
				'partOfSeason' => array(
					'expectedTypes' => array('TVSeason')
				),
				'partOfTVSeries' => array(
					'expectedTypes' => array('TVSeries')
				),
				'producer' => array(
					'expectedTypes' => array('Person')
				),
				'productionCompany' => array(
					'expectedTypes' => array('Organization')
				),
				'trailer' => array(
					'expectedTypes' => array('VideoObject')
				)
			)
		),
		'TVSeason' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'endDate' => array(
					'expectedTypes' => array('Date')
				),
				'episode' => array(
					'expectedTypes' => array('TVEpisode')
				),
				'episodes' => array(
					'expectedTypes' => array('TVEpisode')
				),
				'numberOfEpisodes' => array(
					'expectedTypes' => array('Number')
				),
				'partOfTVSeries' => array(
					'expectedTypes' => array('TVSeries')
				),
				'seasonNumber' => array(
					'expectedTypes' => array('Integer')
				),
				'startDate' => array(
					'expectedTypes' => array('Date')
				),
				'trailer' => array(
					'expectedTypes' => array('VideoObject')
				)
			)
		),
		'TVSeries' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'actor' => array(
					'expectedTypes' => array('Person')
				),
				'actors' => array(
					'expectedTypes' => array('Person')
				),
				'director' => array(
					'expectedTypes' => array('Person')
				),
				'endDate' => array(
					'expectedTypes' => array('Date')
				),
				'episode' => array(
					'expectedTypes' => array('TVEpisode')
				),
				'episodes' => array(
					'expectedTypes' => array('TVEpisode')
				),
				'musicBy' => array(
					'expectedTypes' => array('MusicGroup', 'Person')
				),
				'numberOfEpisodes' => array(
					'expectedTypes' => array('Number')
				),
				'producer' => array(
					'expectedTypes' => array('Person')
				),
				'productionCompany' => array(
					'expectedTypes' => array('Organization')
				),
				'season' => array(
					'expectedTypes' => array('TVSeason')
				),
				'seasons' => array(
					'expectedTypes' => array('TVSeason')
				),
				'startDate' => array(
					'expectedTypes' => array('Date')
				),
				'trailer' => array(
					'expectedTypes' => array('VideoObject')
				)
			)
		),
		'WebPage' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'breadcrumb' => array(
					'expectedTypes' => array('Text')
				),
				'isPartOf' => array(
					'expectedTypes' => array('CollectionPage')
				),
				'lastReviewed' => array(
					'expectedTypes' => array('Date')
				),
				'mainContentOfPage' => array(
					'expectedTypes' => array('WebPageElement')
				),
				'primaryImageOfPage' => array(
					'expectedTypes' => array('ImageObject')
				),
				'relatedLink' => array(
					'expectedTypes' => array('URL')
				),
				'reviewedBy' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'significantLink' => array(
					'expectedTypes' => array('URL')
				),
				'significantLinks' => array(
					'expectedTypes' => array('URL')
				),
				'specialty' => array(
					'expectedTypes' => array('Specialty')
				)
			)
		),
		'AboutPage' => array(
			'extends' => 'WebPage',
			'properties' => array()
		),
		'CheckoutPage' => array(
			'extends' => 'WebPage',
			'properties' => array()
		),
		'CollectionPage' => array(
			'extends' => 'WebPage',
			'properties' => array()
		),
		'ImageGallery' => array(
			'extends' => 'CollectionPage',
			'properties' => array()
		),
		'VideoGallery' => array(
			'extends' => 'CollectionPage',
			'properties' => array()
		),
		'ContactPage' => array(
			'extends' => 'WebPage',
			'properties' => array()
		),
		'ItemPage' => array(
			'extends' => 'WebPage',
			'properties' => array()
		),
		'MedicalWebPage' => array(
			'extends' => 'WebPage',
			'properties' => array(
				'aspect' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'ProfilePage' => array(
			'extends' => 'WebPage',
			'properties' => array()
		),
		'SearchResultsPage' => array(
			'extends' => 'WebPage',
			'properties' => array()
		),
		'WebPageElement' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'SiteNavigationElement' => array(
			'extends' => 'WebPageElement',
			'properties' => array()
		),
		'Table' => array(
			'extends' => 'WebPageElement',
			'properties' => array()
		),
		'WPAdBlock' => array(
			'extends' => 'WebPageElement',
			'properties' => array()
		),
		'WPFooter' => array(
			'extends' => 'WebPageElement',
			'properties' => array()
		),
		'WPHeader' => array(
			'extends' => 'WebPageElement',
			'properties' => array()
		),
		'WPSideBar' => array(
			'extends' => 'WebPageElement',
			'properties' => array()
		),
		'Event' => array(
			'extends' => 'Thing',
			'properties' => array(
				'attendee' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'attendees' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'duration' => array(
					'expectedTypes' => array('Duration')
				),
				'endDate' => array(
					'expectedTypes' => array('Date')
				),
				'location' => array(
					'expectedTypes' => array('Place', 'PostalAddress')
				),
				'offers' => array(
					'expectedTypes' => array('Offer')
				),
				'performer' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'performers' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'startDate' => array(
					'expectedTypes' => array('Date')
				),
				'subEvent' => array(
					'expectedTypes' => array('Event')
				),
				'subEvents' => array(
					'expectedTypes' => array('Event')
				),
				'superEvent' => array(
					'expectedTypes' => array('Event')
				)
			)
		),
		'BusinessEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'ChildrensEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'ComedyEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'DanceEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'EducationEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'Festival' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'FoodEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'LiteraryEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'MusicEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'SaleEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'SocialEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'SportsEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'TheaterEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'UserInteraction' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'UserBlocks' => array(
			'extends' => 'UserInteraction',
			'properties' => array()
		),
		'UserCheckins' => array(
			'extends' => 'UserInteraction',
			'properties' => array()
		),
		'UserComments' => array(
			'extends' => 'UserInteraction',
			'properties' => array(
				'commentText' => array(
					'expectedTypes' => array('Text')
				),
				'commentTime' => array(
					'expectedTypes' => array('Date')
				),
				'creator' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'discusses' => array(
					'expectedTypes' => array('CreativeWork')
				),
				'replyToUrl' => array(
					'expectedTypes' => array('URL')
				)
			)
		),
		'UserDownloads' => array(
			'extends' => 'UserInteraction',
			'properties' => array()
		),
		'UserLikes' => array(
			'extends' => 'UserInteraction',
			'properties' => array()
		),
		'UserPageVisits' => array(
			'extends' => 'UserInteraction',
			'properties' => array()
		),
		'UserPlays' => array(
			'extends' => 'UserInteraction',
			'properties' => array()
		),
		'UserPlusOnes' => array(
			'extends' => 'UserInteraction',
			'properties' => array()
		),
		'UserTweets' => array(
			'extends' => 'UserInteraction',
			'properties' => array()
		),
		'VisualArtsEvent' => array(
			'extends' => 'Event',
			'properties' => array()
		),
		'Intangible' => array(
			'extends' => 'Thing',
			'properties' => array()
		),
		'AlignmentObject' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'alignmentType' => array(
					'expectedTypes' => array('Text')
				),
				'educationalFramework' => array(
					'expectedTypes' => array('Text')
				),
				'targetDescription' => array(
					'expectedTypes' => array('Text')
				),
				'targetName' => array(
					'expectedTypes' => array('Text')
				),
				'targetUrl' => array(
					'expectedTypes' => array('URL')
				)
			)
		),
		'Audience' => array(
			'extends' => 'Intangible',
			'properties' => array()
		),
		'EducationalAudience' => array(
			'extends' => 'Audience',
			'properties' => array(
				'educationalRole' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'MedicalAudience' => array(
			'extends' => 'Audience',
			'properties' => array()
		),
		'PeopleAudience' => array(
			'extends' => 'Audience',
			'properties' => array(
				'healthCondition' => array(
					'expectedTypes' => array('MedicalCondition')
				),
				'suggestedGender' => array(
					'expectedTypes' => array('Text')
				),
				'suggestedMaxAge' => array(
					'expectedTypes' => array('Number')
				),
				'suggestedMinAge' => array(
					'expectedTypes' => array('Number')
				)
			)
		),
		'ParentAudience' => array(
			'extends' => 'PeopleAudience',
			'properties' => array(
				'childMaxAge' => array(
					'expectedTypes' => array('Number')
				),
				'childMinAge' => array(
					'expectedTypes' => array('Number')
				)
			)
		),
		'Brand' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'logo' => array(
					'expectedTypes' => array('ImageObject', 'URL')
				)
			)
		),
		'Demand' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'acceptedPaymentMethod' => array(
					'expectedTypes' => array('PaymentMethod')
				),
				'advanceBookingRequirement' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'availability' => array(
					'expectedTypes' => array('ItemAvailability')
				),
				'availabilityEnds' => array(
					'expectedTypes' => array('DateTime')
				),
				'availabilityStarts' => array(
					'expectedTypes' => array('DateTime')
				),
				'availableAtOrFrom' => array(
					'expectedTypes' => array('Place')
				),
				'availableDeliveryMethod' => array(
					'expectedTypes' => array('DeliveryMethod')
				),
				'businessFunction' => array(
					'expectedTypes' => array('BusinessFunction')
				),
				'deliveryLeadTime' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'eligibleCustomerType' => array(
					'expectedTypes' => array('BusinessEntityType')
				),
				'eligibleDuration' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'eligibleQuantity' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'eligibleRegion' => array(
					'expectedTypes' => array('GeoShape', 'Text')
				),
				'eligibleTransactionVolume' => array(
					'expectedTypes' => array('PriceSpecification')
				),
				'gtin13' => array(
					'expectedTypes' => array('Text')
				),
				'gtin14' => array(
					'expectedTypes' => array('Text')
				),
				'gtin8' => array(
					'expectedTypes' => array('Text')
				),
				'includesObject' => array(
					'expectedTypes' => array('TypeAndQuantityNode')
				),
				'inventoryLevel' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'itemCondition' => array(
					'expectedTypes' => array('OfferItemCondition')
				),
				'itemOffered' => array(
					'expectedTypes' => array('Product')
				),
				'mpn' => array(
					'expectedTypes' => array('Text')
				),
				'priceSpecification' => array(
					'expectedTypes' => array('PriceSpecification')
				),
				'seller' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'serialNumber' => array(
					'expectedTypes' => array('Text')
				),
				'sku' => array(
					'expectedTypes' => array('Text')
				),
				'validFrom' => array(
					'expectedTypes' => array('DateTime')
				),
				'validThrough' => array(
					'expectedTypes' => array('DateTime')
				),
				'warranty' => array(
					'expectedTypes' => array('WarrantyPromise')
				)
			)
		),
		'Enumeration' => array(
			'extends' => 'Intangible',
			'properties' => array()
		),
		'BookFormatType' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'BusinessEntityType' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'BusinessFunction' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'DayOfWeek' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'DeliveryMethod' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'ParcelService' => array(
			'extends' => 'DeliveryMethod',
			'properties' => array()
		),
		'ItemAvailability' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'OfferItemCondition' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'PaymentMethod' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'CreditCard' => array(
			'extends' => 'PaymentMethod',
			'properties' => array()
		),
		'QualitativeValue' => array(
			'extends' => 'Enumeration',
			'properties' => array(
				'equal' => array(
					'expectedTypes' => array('QualitativeValue')
				),
				'greater' => array(
					'expectedTypes' => array('QualitativeValue')
				),
				'greaterOrEqual' => array(
					'expectedTypes' => array('QualitativeValue')
				),
				'lesser' => array(
					'expectedTypes' => array('QualitativeValue')
				),
				'lesserOrEqual' => array(
					'expectedTypes' => array('QualitativeValue')
				),
				'nonEqual' => array(
					'expectedTypes' => array('QualitativeValue')
				),
				'valueReference' => array(
					'expectedTypes' => array('Enumeration', 'StructuredValue')
				)
			)
		),
		'Specialty' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'MedicalSpecialty' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'WarrantyScope' => array(
			'extends' => 'Enumeration',
			'properties' => array()
		),
		'JobPosting' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'baseSalary' => array(
					'expectedTypes' => array('Number')
				),
				'benefits' => array(
					'expectedTypes' => array('Text')
				),
				'datePosted' => array(
					'expectedTypes' => array('Date')
				),
				'educationRequirements' => array(
					'expectedTypes' => array('Text')
				),
				'employmentType' => array(
					'expectedTypes' => array('Text')
				),
				'experienceRequirements' => array(
					'expectedTypes' => array('Text')
				),
				'hiringOrganization' => array(
					'expectedTypes' => array('Organization')
				),
				'incentives' => array(
					'expectedTypes' => array('Text')
				),
				'industry' => array(
					'expectedTypes' => array('Text')
				),
				'jobLocation' => array(
					'expectedTypes' => array('Place')
				),
				'occupationalCategory' => array(
					'expectedTypes' => array('Text')
				),
				'qualifications' => array(
					'expectedTypes' => array('Text')
				),
				'responsibilities' => array(
					'expectedTypes' => array('Text')
				),
				'salaryCurrency' => array(
					'expectedTypes' => array('Text')
				),
				'skills' => array(
					'expectedTypes' => array('Text')
				),
				'specialCommitments' => array(
					'expectedTypes' => array('Text')
				),
				'title' => array(
					'expectedTypes' => array('Text')
				),
				'workHours' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'Language' => array(
			'extends' => 'Intangible',
			'properties' => array()
		),
		'Offer' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'acceptedPaymentMethod' => array(
					'expectedTypes' => array('PaymentMethod')
				),
				'addOn' => array(
					'expectedTypes' => array('Offer')
				),
				'advanceBookingRequirement' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'aggregateRating' => array(
					'expectedTypes' => array('AggregateRating')
				),
				'availability' => array(
					'expectedTypes' => array('ItemAvailability')
				),
				'availabilityEnds' => array(
					'expectedTypes' => array('DateTime')
				),
				'availabilityStarts' => array(
					'expectedTypes' => array('DateTime')
				),
				'availableAtOrFrom' => array(
					'expectedTypes' => array('Place')
				),
				'availableDeliveryMethod' => array(
					'expectedTypes' => array('DeliveryMethod')
				),
				'businessFunction' => array(
					'expectedTypes' => array('BusinessFunction')
				),
				'category' => array(
					'expectedTypes' => array('PhysicalActivityCategory', 'Text', 'Thing')
				),
				'deliveryLeadTime' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'eligibleCustomerType' => array(
					'expectedTypes' => array('BusinessEntityType')
				),
				'eligibleDuration' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'eligibleQuantity' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'eligibleRegion' => array(
					'expectedTypes' => array('GeoShape', 'Text')
				),
				'eligibleTransactionVolume' => array(
					'expectedTypes' => array('PriceSpecification')
				),
				'gtin13' => array(
					'expectedTypes' => array('Text')
				),
				'gtin14' => array(
					'expectedTypes' => array('Text')
				),
				'gtin8' => array(
					'expectedTypes' => array('Text')
				),
				'includesObject' => array(
					'expectedTypes' => array('TypeAndQuantityNode')
				),
				'inventoryLevel' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'itemCondition' => array(
					'expectedTypes' => array('OfferItemCondition')
				),
				'itemOffered' => array(
					'expectedTypes' => array('Product')
				),
				'mpn' => array(
					'expectedTypes' => array('Text')
				),
				'price' => array(
					'expectedTypes' => array('Number', 'Text')
				),
				'priceCurrency' => array(
					'expectedTypes' => array('Text')
				),
				'priceSpecification' => array(
					'expectedTypes' => array('PriceSpecification')
				),
				'priceValidUntil' => array(
					'expectedTypes' => array('Date')
				),
				'review' => array(
					'expectedTypes' => array('Review')
				),
				'reviews' => array(
					'expectedTypes' => array('Review')
				),
				'seller' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'serialNumber' => array(
					'expectedTypes' => array('Text')
				),
				'sku' => array(
					'expectedTypes' => array('Text')
				),
				'validFrom' => array(
					'expectedTypes' => array('DateTime')
				),
				'validThrough' => array(
					'expectedTypes' => array('DateTime')
				),
				'warranty' => array(
					'expectedTypes' => array('WarrantyPromise')
				)
			)
		),
		'AggregateOffer' => array(
			'extends' => 'Offer',
			'properties' => array(
				'highPrice' => array(
					'expectedTypes' => array('Number', 'Text')
				),
				'lowPrice' => array(
					'expectedTypes' => array('Number', 'Text')
				),
				'offerCount' => array(
					'expectedTypes' => array('Integer')
				)
			)
		),
		'Quantity' => array(
			'extends' => 'Intangible',
			'properties' => array()
		),
		'Distance' => array(
			'extends' => 'Quantity',
			'properties' => array()
		),
		'Duration' => array(
			'extends' => 'Quantity',
			'properties' => array()
		),
		'Energy' => array(
			'extends' => 'Quantity',
			'properties' => array()
		),
		'Mass' => array(
			'extends' => 'Quantity',
			'properties' => array()
		),
		'Rating' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'bestRating' => array(
					'expectedTypes' => array('Number', 'Text')
				),
				'ratingValue' => array(
					'expectedTypes' => array('Text')
				),
				'worstRating' => array(
					'expectedTypes' => array('Number', 'Text')
				)
			)
		),
		'AggregateRating' => array(
			'extends' => 'Rating',
			'properties' => array(
				'itemReviewed' => array(
					'expectedTypes' => array('Thing')
				),
				'ratingCount' => array(
					'expectedTypes' => array('Number')
				),
				'reviewCount' => array(
					'expectedTypes' => array('Number')
				)
			)
		),
		'StructuredValue' => array(
			'extends' => 'Intangible',
			'properties' => array()
		),
		'ContactPoint' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'contactType' => array(
					'expectedTypes' => array('Text')
				),
				'email' => array(
					'expectedTypes' => array('Text')
				),
				'faxNumber' => array(
					'expectedTypes' => array('Text')
				),
				'telephone' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'PostalAddress' => array(
			'extends' => 'ContactPoint',
			'properties' => array(
				'addressCountry' => array(
					'expectedTypes' => array('Country')
				),
				'addressLocality' => array(
					'expectedTypes' => array('Text')
				),
				'addressRegion' => array(
					'expectedTypes' => array('Text')
				),
				'postalCode' => array(
					'expectedTypes' => array('Text')
				),
				'postOfficeBoxNumber' => array(
					'expectedTypes' => array('Text')
				),
				'streetAddress' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'GeoCoordinates' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'elevation' => array(
					'expectedTypes' => array('Number', 'Text')
				),
				'latitude' => array(
					'expectedTypes' => array('Number', 'Text')
				),
				'longitude' => array(
					'expectedTypes' => array('Number', 'Text')
				)
			)
		),
		'GeoShape' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'box' => array(
					'expectedTypes' => array('Text')
				),
				'circle' => array(
					'expectedTypes' => array('Text')
				),
				'elevation' => array(
					'expectedTypes' => array('Number', 'Text')
				),
				'line' => array(
					'expectedTypes' => array('Text')
				),
				'polygon' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'NutritionInformation' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'calories' => array(
					'expectedTypes' => array('Energy')
				),
				'carbohydrateContent' => array(
					'expectedTypes' => array('Mass')
				),
				'cholesterolContent' => array(
					'expectedTypes' => array('Mass')
				),
				'fatContent' => array(
					'expectedTypes' => array('Mass')
				),
				'fiberContent' => array(
					'expectedTypes' => array('Mass')
				),
				'proteinContent' => array(
					'expectedTypes' => array('Mass')
				),
				'saturatedFatContent' => array(
					'expectedTypes' => array('Mass')
				),
				'servingSize' => array(
					'expectedTypes' => array('Text')
				),
				'sodiumContent' => array(
					'expectedTypes' => array('Mass')
				),
				'sugarContent' => array(
					'expectedTypes' => array('Mass')
				),
				'transFatContent' => array(
					'expectedTypes' => array('Mass')
				),
				'unsaturatedFatContent' => array(
					'expectedTypes' => array('Mass')
				)
			)
		),
		'OpeningHoursSpecification' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'closes' => array(
					'expectedTypes' => array('Time')
				),
				'dayOfWeek' => array(
					'expectedTypes' => array('DayOfWeek')
				),
				'opens' => array(
					'expectedTypes' => array('Time')
				),
				'validFrom' => array(
					'expectedTypes' => array('DateTime')
				),
				'validThrough' => array(
					'expectedTypes' => array('DateTime')
				)
			)
		),
		'OwnershipInfo' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'acquiredFrom' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'ownedFrom' => array(
					'expectedTypes' => array('DateTime')
				),
				'ownedThrough' => array(
					'expectedTypes' => array('DateTime')
				),
				'typeOfGood' => array(
					'expectedTypes' => array('Product')
				)
			)
		),
		'PriceSpecification' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'eligibleQuantity' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'eligibleTransactionVolume' => array(
					'expectedTypes' => array('PriceSpecification')
				),
				'maxPrice' => array(
					'expectedTypes' => array('Number')
				),
				'minPrice' => array(
					'expectedTypes' => array('Number')
				),
				'price' => array(
					'expectedTypes' => array('Number', 'Text')
				),
				'priceCurrency' => array(
					'expectedTypes' => array('Text')
				),
				'validFrom' => array(
					'expectedTypes' => array('DateTime')
				),
				'validThrough' => array(
					'expectedTypes' => array('DateTime')
				),
				'valueAddedTaxIncluded' => array(
					'expectedTypes' => array('Boolean')
				)
			)
		),
		'DeliveryChargeSpecification' => array(
			'extends' => 'PriceSpecification',
			'properties' => array(
				'appliesToDeliveryMethod' => array(
					'expectedTypes' => array('DeliveryMethod')
				),
				'eligibleRegion' => array(
					'expectedTypes' => array('GeoShape', 'Text')
				)
			)
		),
		'PaymentChargeSpecification' => array(
			'extends' => 'PriceSpecification',
			'properties' => array(
				'appliesToDeliveryMethod' => array(
					'expectedTypes' => array('DeliveryMethod')
				),
				'appliesToPaymentMethod' => array(
					'expectedTypes' => array('PaymentMethod')
				)
			)
		),
		'UnitPriceSpecification' => array(
			'extends' => 'PriceSpecification',
			'properties' => array(
				'billingIncrement' => array(
					'expectedTypes' => array('Number')
				),
				'priceType' => array(
					'expectedTypes' => array('Text')
				),
				'unitCode' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'QuantitativeValue' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'maxValue' => array(
					'expectedTypes' => array('Number')
				),
				'minValue' => array(
					'expectedTypes' => array('Number')
				),
				'unitCode' => array(
					'expectedTypes' => array('Text')
				),
				'value' => array(
					'expectedTypes' => array('Number')
				),
				'valueReference' => array(
					'expectedTypes' => array('Enumeration', 'StructuredValue')
				)
			)
		),
		'TypeAndQuantityNode' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'amountOfThisGood' => array(
					'expectedTypes' => array('Number')
				),
				'businessFunction' => array(
					'expectedTypes' => array('BusinessFunction')
				),
				'typeOfGood' => array(
					'expectedTypes' => array('Product')
				),
				'unitCode' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'WarrantyPromise' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'durationOfWarranty' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'warrantyScope' => array(
					'expectedTypes' => array('WarrantyScope')
				)
			)
		),
		'MedicalEntity' => array(
			'extends' => 'Thing',
			'properties' => array(
				'alternateName' => array(
					'expectedTypes' => array('Text')
				),
				'code' => array(
					'expectedTypes' => array('MedicalCode')
				),
				'guideline' => array(
					'expectedTypes' => array('MedicalGuideline')
				),
				'medicineSystem' => array(
					'expectedTypes' => array('MedicineSystem')
				),
				'recognizingAuthority' => array(
					'expectedTypes' => array('Organization')
				),
				'relevantSpecialty' => array(
					'expectedTypes' => array('MedicalSpecialty')
				),
				'study' => array(
					'expectedTypes' => array('MedicalStudy')
				)
			)
		),
		'AnatomicalStructure' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'associatedPathophysiology' => array(
					'expectedTypes' => array('Text')
				),
				'bodyLocation' => array(
					'expectedTypes' => array('Text')
				),
				'connectedTo' => array(
					'expectedTypes' => array('AnatomicalStructure')
				),
				'diagram' => array(
					'expectedTypes' => array('ImageObject')
				),
				'function' => array(
					'expectedTypes' => array('Text')
				),
				'partOfSystem' => array(
					'expectedTypes' => array('AnatomicalSystem')
				),
				'relatedCondition' => array(
					'expectedTypes' => array('MedicalCondition')
				),
				'relatedTherapy' => array(
					'expectedTypes' => array('MedicalTherapy')
				),
				'subStructure' => array(
					'expectedTypes' => array('AnatomicalStructure')
				)
			)
		),
		'Bone' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array()
		),
		'BrainStructure' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array()
		),
		'Joint' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array(
				'biomechnicalClass' => array(
					'expectedTypes' => array('Text')
				),
				'functionalClass' => array(
					'expectedTypes' => array('Text')
				),
				'structuralClass' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'Ligament' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array()
		),
		'Muscle' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array(
				'action' => array(
					'expectedTypes' => array('Text')
				),
				'antagonist' => array(
					'expectedTypes' => array('Muscle')
				),
				'bloodSupply' => array(
					'expectedTypes' => array('Vessel')
				),
				'insertion' => array(
					'expectedTypes' => array('AnatomicalStructure')
				),
				'nerve' => array(
					'expectedTypes' => array('Nerve')
				),
				'origin' => array(
					'expectedTypes' => array('AnatomicalStructure')
				)
			)
		),
		'Nerve' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array(
				'branch' => array(
					'expectedTypes' => array('AnatomicalStructure', 'Nerve')
				),
				'nerveMotor' => array(
					'expectedTypes' => array('Muscle')
				),
				'sensoryUnit' => array(
					'expectedTypes' => array('AnatomicalStructure', 'SuperficialAnatomy')
				),
				'sourcedFrom' => array(
					'expectedTypes' => array('BrainStructure')
				)
			)
		),
		'Vessel' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array()
		),
		'Artery' => array(
			'extends' => 'Vessel',
			'properties' => array(
				'arterialBranch' => array(
					'expectedTypes' => array('AnatomicalStructure')
				),
				'source' => array(
					'expectedTypes' => array('AnatomicalStructure')
				),
				'supplyTo' => array(
					'expectedTypes' => array('AnatomicalStructure')
				)
			)
		),
		'LymphaticVessel' => array(
			'extends' => 'Vessel',
			'properties' => array(
				'originatesFrom' => array(
					'expectedTypes' => array('Vessel')
				),
				'regionDrained' => array(
					'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem')
				),
				'runsTo' => array(
					'expectedTypes' => array('Vessel')
				)
			)
		),
		'Vein' => array(
			'extends' => 'Vessel',
			'properties' => array(
				'drainsTo' => array(
					'expectedTypes' => array('Vessel')
				),
				'regionDrained' => array(
					'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem')
				),
				'tributary' => array(
					'expectedTypes' => array('AnatomicalStructure')
				)
			)
		),
		'AnatomicalSystem' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'associatedPathophysiology' => array(
					'expectedTypes' => array('Text')
				),
				'comprisedOf' => array(
					'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem')
				),
				'relatedCondition' => array(
					'expectedTypes' => array('MedicalCondition')
				),
				'relatedStructure' => array(
					'expectedTypes' => array('AnatomicalStructure')
				),
				'relatedTherapy' => array(
					'expectedTypes' => array('MedicalTherapy')
				)
			)
		),
		'MedicalCause' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'causeOf' => array(
					'expectedTypes' => array('MedicalEntity')
				)
			)
		),
		'MedicalCondition' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'associatedAnatomy' => array(
					'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem', 'SuperficialAnatomy')
				),
				'cause' => array(
					'expectedTypes' => array('MedicalCause')
				),
				'differentialDiagnosis' => array(
					'expectedTypes' => array('DDxElement')
				),
				'epidemiology' => array(
					'expectedTypes' => array('Text')
				),
				'expectedPrognosis' => array(
					'expectedTypes' => array('Text')
				),
				'naturalProgression' => array(
					'expectedTypes' => array('Text')
				),
				'pathophysiology' => array(
					'expectedTypes' => array('Text')
				),
				'possibleComplication' => array(
					'expectedTypes' => array('Text')
				),
				'possibleTreatment' => array(
					'expectedTypes' => array('MedicalTherapy')
				),
				'primaryPrevention' => array(
					'expectedTypes' => array('MedicalTherapy')
				),
				'riskFactor' => array(
					'expectedTypes' => array('MedicalRiskFactor')
				),
				'secondaryPrevention' => array(
					'expectedTypes' => array('MedicalTherapy')
				),
				'signOrSymptom' => array(
					'expectedTypes' => array('MedicalSignOrSymptom')
				),
				'stage' => array(
					'expectedTypes' => array('MedicalConditionStage')
				),
				'subtype' => array(
					'expectedTypes' => array('Text')
				),
				'typicalTest' => array(
					'expectedTypes' => array('MedicalTest')
				)
			)
		),
		'InfectiousDisease' => array(
			'extends' => 'MedicalCondition',
			'properties' => array(
				'infectiousAgent' => array(
					'expectedTypes' => array('Text')
				),
				'infectiousAgentClass' => array(
					'expectedTypes' => array('InfectiousAgentClass')
				),
				'transmissionMethod' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'MedicalContraindication' => array(
			'extends' => 'MedicalEntity',
			'properties' => array()
		),
		'MedicalDevice' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'adverseOutcome' => array(
					'expectedTypes' => array('MedicalEntity')
				),
				'contraindication' => array(
					'expectedTypes' => array('MedicalContraindication')
				),
				'indication' => array(
					'expectedTypes' => array('MedicalIndication')
				),
				'postOp' => array(
					'expectedTypes' => array('Text')
				),
				'preOp' => array(
					'expectedTypes' => array('Text')
				),
				'procedure' => array(
					'expectedTypes' => array('Text')
				),
				'purpose' => array(
					'expectedTypes' => array('MedicalDevicePurpose')
				),
				'seriousAdverseOutcome' => array(
					'expectedTypes' => array('MedicalEntity')
				)
			)
		),
		'MedicalGuideline' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'evidenceLevel' => array(
					'expectedTypes' => array('MedicalEvidenceLevel')
				),
				'evidenceOrigin' => array(
					'expectedTypes' => array('Text')
				),
				'guidelineDate' => array(
					'expectedTypes' => array('Date')
				),
				'guidelineSubject' => array(
					'expectedTypes' => array('MedicalEntity')
				)
			)
		),
		'MedicalGuidelineContraindication' => array(
			'extends' => 'MedicalGuideline',
			'properties' => array()
		),
		'MedicalGuidelineRecommendation' => array(
			'extends' => 'MedicalGuideline',
			'properties' => array(
				'recommendationStrength' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'MedicalIndication' => array(
			'extends' => 'MedicalEntity',
			'properties' => array()
		),
		'ApprovedIndication' => array(
			'extends' => 'MedicalIndication',
			'properties' => array()
		),
		'PreventionIndication' => array(
			'extends' => 'MedicalIndication',
			'properties' => array()
		),
		'TreatmentIndication' => array(
			'extends' => 'MedicalIndication',
			'properties' => array()
		),
		'MedicalIntangible' => array(
			'extends' => 'MedicalEntity',
			'properties' => array()
		),
		'DDxElement' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'diagnosis' => array(
					'expectedTypes' => array('MedicalCondition')
				),
				'distinguishingSign' => array(
					'expectedTypes' => array('MedicalSignOrSymptom')
				)
			)
		),
		'DoseSchedule' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'doseUnit' => array(
					'expectedTypes' => array('Text')
				),
				'doseValue' => array(
					'expectedTypes' => array('Number')
				),
				'frequency' => array(
					'expectedTypes' => array('Text')
				),
				'targetPopulation' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'MaximumDoseSchedule' => array(
			'extends' => 'DoseSchedule',
			'properties' => array()
		),
		'RecommendedDoseSchedule' => array(
			'extends' => 'DoseSchedule',
			'properties' => array()
		),
		'ReportedDoseSchedule' => array(
			'extends' => 'DoseSchedule',
			'properties' => array()
		),
		'DrugCost' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'applicableLocation' => array(
					'expectedTypes' => array('AdministrativeArea')
				),
				'costCategory' => array(
					'expectedTypes' => array('DrugCostCategory')
				),
				'costCurrency' => array(
					'expectedTypes' => array('Text')
				),
				'costOrigin' => array(
					'expectedTypes' => array('Text')
				),
				'costPerUnit' => array(
					'expectedTypes' => array('Number', 'Text')
				),
				'drugUnit' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'DrugLegalStatus' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'applicableLocation' => array(
					'expectedTypes' => array('AdministrativeArea')
				)
			)
		),
		'DrugStrength' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'activeIngredient' => array(
					'expectedTypes' => array('Text')
				),
				'availableIn' => array(
					'expectedTypes' => array('AdministrativeArea')
				),
				'strengthUnit' => array(
					'expectedTypes' => array('Text')
				),
				'strengthValue' => array(
					'expectedTypes' => array('Number')
				)
			)
		),
		'MedicalCode' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'codeValue' => array(
					'expectedTypes' => array('Text')
				),
				'codingSystem' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'MedicalConditionStage' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'stageAsNumber' => array(
					'expectedTypes' => array('Number')
				),
				'subStageSuffix' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'MedicalEnumeration' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array()
		),
		'DrugCostCategory' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'DrugPregnancyCategory' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'DrugPrescriptionStatus' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'InfectiousAgentClass' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'MedicalDevicePurpose' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'MedicalEvidenceLevel' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'MedicalImagingTechnique' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'MedicalObservationalStudyDesign' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'MedicalProcedureType' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'MedicalStudyStatus' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'MedicalTrialDesign' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'MedicineSystem' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'PhysicalActivityCategory' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'PhysicalExam' => array(
			'extends' => 'MedicalEnumeration',
			'properties' => array()
		),
		'MedicalProcedure' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'followup' => array(
					'expectedTypes' => array('Text')
				),
				'howPerformed' => array(
					'expectedTypes' => array('Text')
				),
				'preparation' => array(
					'expectedTypes' => array('Text')
				),
				'procedureType' => array(
					'expectedTypes' => array('MedicalProcedureType')
				)
			)
		),
		'DiagnosticProcedure' => array(
			'extends' => 'MedicalProcedure',
			'properties' => array()
		),
		'PalliativeProcedure' => array(
			'extends' => 'MedicalProcedure',
			'properties' => array()
		),
		'TherapeuticProcedure' => array(
			'extends' => 'MedicalProcedure',
			'properties' => array()
		),
		'MedicalRiskEstimator' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'estimatesRiskOf' => array(
					'expectedTypes' => array('MedicalEntity')
				),
				'includedRiskFactor' => array(
					'expectedTypes' => array('MedicalRiskFactor')
				)
			)
		),
		'MedicalRiskCalculator' => array(
			'extends' => 'MedicalRiskEstimator',
			'properties' => array()
		),
		'MedicalRiskScore' => array(
			'extends' => 'MedicalRiskEstimator',
			'properties' => array(
				'algorithm' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'MedicalRiskFactor' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'increasesRiskOf' => array(
					'expectedTypes' => array('MedicalEntity')
				)
			)
		),
		'MedicalSignOrSymptom' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'cause' => array(
					'expectedTypes' => array('MedicalCause')
				),
				'possibleTreatment' => array(
					'expectedTypes' => array('MedicalTherapy')
				)
			)
		),
		'MedicalSign' => array(
			'extends' => 'MedicalSignOrSymptom',
			'properties' => array(
				'identifyingExam' => array(
					'expectedTypes' => array('PhysicalExam')
				),
				'identifyingTest' => array(
					'expectedTypes' => array('MedicalTest')
				)
			)
		),
		'MedicalSymptom' => array(
			'extends' => 'MedicalSignOrSymptom',
			'properties' => array()
		),
		'MedicalStudy' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'outcome' => array(
					'expectedTypes' => array('Text')
				),
				'population' => array(
					'expectedTypes' => array('Text')
				),
				'sponsor' => array(
					'expectedTypes' => array('Organization')
				),
				'status' => array(
					'expectedTypes' => array('MedicalStudyStatus')
				),
				'studyLocation' => array(
					'expectedTypes' => array('AdministrativeArea')
				),
				'studySubject' => array(
					'expectedTypes' => array('MedicalEntity')
				)
			)
		),
		'MedicalObservationalStudy' => array(
			'extends' => 'MedicalStudy',
			'properties' => array(
				'studyDesign' => array(
					'expectedTypes' => array('MedicalObservationalStudyDesign')
				)
			)
		),
		'MedicalTrial' => array(
			'extends' => 'MedicalStudy',
			'properties' => array(
				'phase' => array(
					'expectedTypes' => array('Text')
				),
				'trialDesign' => array(
					'expectedTypes' => array('MedicalTrialDesign')
				)
			)
		),
		'MedicalTest' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'affectedBy' => array(
					'expectedTypes' => array('Drug')
				),
				'normalRange' => array(
					'expectedTypes' => array('Text')
				),
				'signDetected' => array(
					'expectedTypes' => array('MedicalSign')
				),
				'usedToDiagnose' => array(
					'expectedTypes' => array('MedicalCondition')
				),
				'usesDevice' => array(
					'expectedTypes' => array('MedicalDevice')
				)
			)
		),
		'BloodTest' => array(
			'extends' => 'MedicalTest',
			'properties' => array()
		),
		'ImagingTest' => array(
			'extends' => 'MedicalTest',
			'properties' => array(
				'imagingTechnique' => array(
					'expectedTypes' => array('MedicalImagingTechnique')
				)
			)
		),
		'MedicalTestPanel' => array(
			'extends' => 'MedicalTest',
			'properties' => array(
				'subTest' => array(
					'expectedTypes' => array('MedicalTest')
				)
			)
		),
		'PathologyTest' => array(
			'extends' => 'MedicalTest',
			'properties' => array(
				'tissueSample' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'MedicalTherapy' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'adverseOutcome' => array(
					'expectedTypes' => array('MedicalEntity')
				),
				'contraindication' => array(
					'expectedTypes' => array('MedicalContraindication')
				),
				'duplicateTherapy' => array(
					'expectedTypes' => array('MedicalTherapy')
				),
				'indication' => array(
					'expectedTypes' => array('MedicalIndication')
				),
				'seriousAdverseOutcome' => array(
					'expectedTypes' => array('MedicalEntity')
				)
			)
		),
		'DietarySupplement' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array(
				'activeIngredient' => array(
					'expectedTypes' => array('Text')
				),
				'background' => array(
					'expectedTypes' => array('Text')
				),
				'dosageForm' => array(
					'expectedTypes' => array('Text')
				),
				'isProprietary' => array(
					'expectedTypes' => array('Boolean')
				),
				'legalStatus' => array(
					'expectedTypes' => array('DrugLegalStatus')
				),
				'manufacturer' => array(
					'expectedTypes' => array('Organization')
				),
				'maximumIntake' => array(
					'expectedTypes' => array('MaximumDoseSchedule')
				),
				'mechanismOfAction' => array(
					'expectedTypes' => array('Text')
				),
				'nonProprietaryName' => array(
					'expectedTypes' => array('Text')
				),
				'recommendedIntake' => array(
					'expectedTypes' => array('RecommendedDoseSchedule')
				),
				'safetyConsideration' => array(
					'expectedTypes' => array('Text')
				),
				'targetPopulation' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'Drug' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array(
				'activeIngredient' => array(
					'expectedTypes' => array('Text')
				),
				'administrationRoute' => array(
					'expectedTypes' => array('Text')
				),
				'alcoholWarning' => array(
					'expectedTypes' => array('Text')
				),
				'availableStrength' => array(
					'expectedTypes' => array('DrugStrength')
				),
				'breastfeedingWarning' => array(
					'expectedTypes' => array('Text')
				),
				'clincalPharmacology' => array(
					'expectedTypes' => array('Text')
				),
				'cost' => array(
					'expectedTypes' => array('DrugCost')
				),
				'dosageForm' => array(
					'expectedTypes' => array('Text')
				),
				'doseSchedule' => array(
					'expectedTypes' => array('DoseSchedule')
				),
				'drugClass' => array(
					'expectedTypes' => array('DrugClass')
				),
				'foodWarning' => array(
					'expectedTypes' => array('Text')
				),
				'interactingDrug' => array(
					'expectedTypes' => array('Drug')
				),
				'isAvailableGenerically' => array(
					'expectedTypes' => array('Boolean')
				),
				'isProprietary' => array(
					'expectedTypes' => array('Boolean')
				),
				'labelDetails' => array(
					'expectedTypes' => array('URL')
				),
				'legalStatus' => array(
					'expectedTypes' => array('DrugLegalStatus')
				),
				'manufacturer' => array(
					'expectedTypes' => array('Organization')
				),
				'mechanismOfAction' => array(
					'expectedTypes' => array('Text')
				),
				'nonProprietaryName' => array(
					'expectedTypes' => array('Text')
				),
				'overdosage' => array(
					'expectedTypes' => array('Text')
				),
				'pregnancyCategory' => array(
					'expectedTypes' => array('DrugPregnancyCategory')
				),
				'pregnancyWarning' => array(
					'expectedTypes' => array('Text')
				),
				'prescribingInfo' => array(
					'expectedTypes' => array('URL')
				),
				'prescriptionStatus' => array(
					'expectedTypes' => array('DrugPrescriptionStatus')
				),
				'relatedDrug' => array(
					'expectedTypes' => array('Drug')
				),
				'warning' => array(
					'expectedTypes' => array('Text', 'URL')
				)
			)
		),
		'DrugClass' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array(
				'drug' => array(
					'expectedTypes' => array('Drug')
				)
			)
		),
		'LifestyleModification' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array()
		),
		'PhysicalActivity' => array(
			'extends' => 'LifestyleModification',
			'properties' => array(
				'associatedAnatomy' => array(
					'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem', 'SuperficialAnatomy')
				),
				'category' => array(
					'expectedTypes' => array('PhysicalActivityCategory', 'Text', 'Thing')
				),
				'epidemiology' => array(
					'expectedTypes' => array('Text')
				),
				'pathophysiology' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'PhysicalTherapy' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array()
		),
		'PsychologicalTreatment' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array()
		),
		'RadiationTherapy' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array()
		),
		'SuperficialAnatomy' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'associatedPathophysiology' => array(
					'expectedTypes' => array('Text')
				),
				'relatedAnatomy' => array(
					'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem')
				),
				'relatedCondition' => array(
					'expectedTypes' => array('MedicalCondition')
				),
				'relatedTherapy' => array(
					'expectedTypes' => array('MedicalTherapy')
				),
				'significance' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'Organization' => array(
			'extends' => 'Thing',
			'properties' => array(
				'address' => array(
					'expectedTypes' => array('PostalAddress')
				),
				'aggregateRating' => array(
					'expectedTypes' => array('AggregateRating')
				),
				'brand' => array(
					'expectedTypes' => array('Brand', 'Organization')
				),
				'contactPoint' => array(
					'expectedTypes' => array('ContactPoint')
				),
				'contactPoints' => array(
					'expectedTypes' => array('ContactPoint')
				),
				'duns' => array(
					'expectedTypes' => array('Text')
				),
				'email' => array(
					'expectedTypes' => array('Text')
				),
				'employee' => array(
					'expectedTypes' => array('Person')
				),
				'employees' => array(
					'expectedTypes' => array('Person')
				),
				'event' => array(
					'expectedTypes' => array('Event')
				),
				'events' => array(
					'expectedTypes' => array('Event')
				),
				'faxNumber' => array(
					'expectedTypes' => array('Text')
				),
				'founder' => array(
					'expectedTypes' => array('Person')
				),
				'founders' => array(
					'expectedTypes' => array('Person')
				),
				'foundingDate' => array(
					'expectedTypes' => array('Date')
				),
				'globalLocationNumber' => array(
					'expectedTypes' => array('Text')
				),
				'hasPOS' => array(
					'expectedTypes' => array('Place')
				),
				'interactionCount' => array(
					'expectedTypes' => array('Text')
				),
				'isicV4' => array(
					'expectedTypes' => array('Text')
				),
				'legalName' => array(
					'expectedTypes' => array('Text')
				),
				'location' => array(
					'expectedTypes' => array('Place', 'PostalAddress')
				),
				'logo' => array(
					'expectedTypes' => array('ImageObject', 'URL')
				),
				'makesOffer' => array(
					'expectedTypes' => array('Offer')
				),
				'member' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'members' => array(
					'expectedTypes' => array('Organization', 'Person')
				),
				'naics' => array(
					'expectedTypes' => array('Text')
				),
				'owns' => array(
					'expectedTypes' => array('OwnershipInfo', 'Product')
				),
				'review' => array(
					'expectedTypes' => array('Review')
				),
				'reviews' => array(
					'expectedTypes' => array('Review')
				),
				'seeks' => array(
					'expectedTypes' => array('Demand')
				),
				'taxID' => array(
					'expectedTypes' => array('Text')
				),
				'telephone' => array(
					'expectedTypes' => array('Text')
				),
				'vatID' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'Corporation' => array(
			'extends' => 'Organization',
			'properties' => array(
				'tickerSymbol' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'EducationalOrganization' => array(
			'extends' => 'Organization',
			'properties' => array(
				'alumni' => array(
					'expectedTypes' => array('Person')
				)
			)
		),
		'CollegeOrUniversity' => array(
			'extends' => 'EducationalOrganization',
			'properties' => array()
		),
		'ElementarySchool' => array(
			'extends' => 'EducationalOrganization',
			'properties' => array()
		),
		'HighSchool' => array(
			'extends' => 'EducationalOrganization',
			'properties' => array()
		),
		'MiddleSchool' => array(
			'extends' => 'EducationalOrganization',
			'properties' => array()
		),
		'Preschool' => array(
			'extends' => 'EducationalOrganization',
			'properties' => array()
		),
		'School' => array(
			'extends' => 'EducationalOrganization',
			'properties' => array()
		),
		'GovernmentOrganization' => array(
			'extends' => 'Organization',
			'properties' => array()
		),
		'LocalBusiness' => array(
			'extends' => 'Organization',
			'properties' => array(
				'branchOf' => array(
					'expectedTypes' => array('Organization')
				),
				'currenciesAccepted' => array(
					'expectedTypes' => array('Text')
				),
				'openingHours' => array(
					'expectedTypes' => array('Duration')
				),
				'paymentAccepted' => array(
					'expectedTypes' => array('Text')
				),
				'priceRange' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'AnimalShelter' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'AutomotiveBusiness' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'AutoBodyShop' => array(
			'extends' => 'AutomotiveBusiness',
			'properties' => array()
		),
		'AutoDealer' => array(
			'extends' => 'AutomotiveBusiness',
			'properties' => array()
		),
		'AutoPartsStore' => array(
			'extends' => 'AutomotiveBusiness',
			'properties' => array()
		),
		'AutoRental' => array(
			'extends' => 'AutomotiveBusiness',
			'properties' => array()
		),
		'AutoRepair' => array(
			'extends' => 'AutomotiveBusiness',
			'properties' => array()
		),
		'AutoWash' => array(
			'extends' => 'AutomotiveBusiness',
			'properties' => array()
		),
		'GasStation' => array(
			'extends' => 'AutomotiveBusiness',
			'properties' => array()
		),
		'MotorcycleDealer' => array(
			'extends' => 'AutomotiveBusiness',
			'properties' => array()
		),
		'MotorcycleRepair' => array(
			'extends' => 'AutomotiveBusiness',
			'properties' => array()
		),
		'ChildCare' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'DryCleaningOrLaundry' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'EmergencyService' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'FireStation' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'Hospital' => array(
			'extends' => 'CivicStructure',
			'properties' => array(
				'availableService' => array(
					'expectedTypes' => array('MedicalProcedure', 'MedicalTest', 'MedicalTherapy')
				),
				'medicalSpecialty' => array(
					'expectedTypes' => array('MedicalSpecialty')
				)
			)
		),
		'PoliceStation' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'EmploymentAgency' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'EntertainmentBusiness' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'AdultEntertainment' => array(
			'extends' => 'EntertainmentBusiness',
			'properties' => array()
		),
		'AmusementPark' => array(
			'extends' => 'EntertainmentBusiness',
			'properties' => array()
		),
		'ArtGallery' => array(
			'extends' => 'EntertainmentBusiness',
			'properties' => array()
		),
		'Casino' => array(
			'extends' => 'EntertainmentBusiness',
			'properties' => array()
		),
		'ComedyClub' => array(
			'extends' => 'EntertainmentBusiness',
			'properties' => array()
		),
		'MovieTheater' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'NightClub' => array(
			'extends' => 'EntertainmentBusiness',
			'properties' => array()
		),
		'FinancialService' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'AccountingService' => array(
			'extends' => 'FinancialService',
			'properties' => array()
		),
		'AutomatedTeller' => array(
			'extends' => 'FinancialService',
			'properties' => array()
		),
		'BankOrCreditUnion' => array(
			'extends' => 'FinancialService',
			'properties' => array()
		),
		'InsuranceAgency' => array(
			'extends' => 'FinancialService',
			'properties' => array()
		),
		'FoodEstablishment' => array(
			'extends' => 'LocalBusiness',
			'properties' => array(
				'acceptsReservations' => array(
					'expectedTypes' => array('Text', 'URL')
				),
				'menu' => array(
					'expectedTypes' => array('Text', 'URL')
				),
				'servesCuisine' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'Bakery' => array(
			'extends' => 'FoodEstablishment',
			'properties' => array()
		),
		'BarOrPub' => array(
			'extends' => 'FoodEstablishment',
			'properties' => array()
		),
		'Brewery' => array(
			'extends' => 'FoodEstablishment',
			'properties' => array()
		),
		'CafeOrCoffeeShop' => array(
			'extends' => 'FoodEstablishment',
			'properties' => array()
		),
		'FastFoodRestaurant' => array(
			'extends' => 'FoodEstablishment',
			'properties' => array()
		),
		'IceCreamShop' => array(
			'extends' => 'FoodEstablishment',
			'properties' => array()
		),
		'Restaurant' => array(
			'extends' => 'FoodEstablishment',
			'properties' => array()
		),
		'Winery' => array(
			'extends' => 'FoodEstablishment',
			'properties' => array()
		),
		'GovernmentOffice' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'PostOffice' => array(
			'extends' => 'GovernmentOffice',
			'properties' => array()
		),
		'HealthAndBeautyBusiness' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'BeautySalon' => array(
			'extends' => 'HealthAndBeautyBusiness',
			'properties' => array()
		),
		'DaySpa' => array(
			'extends' => 'HealthAndBeautyBusiness',
			'properties' => array()
		),
		'HairSalon' => array(
			'extends' => 'HealthAndBeautyBusiness',
			'properties' => array()
		),
		'HealthClub' => array(
			'extends' => 'HealthAndBeautyBusiness',
			'properties' => array()
		),
		'NailSalon' => array(
			'extends' => 'HealthAndBeautyBusiness',
			'properties' => array()
		),
		'TattooParlor' => array(
			'extends' => 'HealthAndBeautyBusiness',
			'properties' => array()
		),
		'HomeAndConstructionBusiness' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'Electrician' => array(
			'extends' => 'HomeAndConstructionBusiness',
			'properties' => array()
		),
		'GeneralContractor' => array(
			'extends' => 'HomeAndConstructionBusiness',
			'properties' => array()
		),
		'HVACBusiness' => array(
			'extends' => 'HomeAndConstructionBusiness',
			'properties' => array()
		),
		'HousePainter' => array(
			'extends' => 'HomeAndConstructionBusiness',
			'properties' => array()
		),
		'Locksmith' => array(
			'extends' => 'HomeAndConstructionBusiness',
			'properties' => array()
		),
		'MovingCompany' => array(
			'extends' => 'HomeAndConstructionBusiness',
			'properties' => array()
		),
		'Plumber' => array(
			'extends' => 'HomeAndConstructionBusiness',
			'properties' => array()
		),
		'RoofingContractor' => array(
			'extends' => 'HomeAndConstructionBusiness',
			'properties' => array()
		),
		'InternetCafe' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'Library' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'LodgingBusiness' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'BedAndBreakfast' => array(
			'extends' => 'LodgingBusiness',
			'properties' => array()
		),
		'Hostel' => array(
			'extends' => 'LodgingBusiness',
			'properties' => array()
		),
		'Hotel' => array(
			'extends' => 'LodgingBusiness',
			'properties' => array()
		),
		'Motel' => array(
			'extends' => 'LodgingBusiness',
			'properties' => array()
		),
		'MedicalOrganization' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'Dentist' => array(
			'extends' => 'MedicalOrganization',
			'properties' => array()
		),
		'DiagnosticLab' => array(
			'extends' => 'MedicalOrganization',
			'properties' => array(
				'availableTest' => array(
					'expectedTypes' => array('MedicalTest')
				)
			)
		),
		'MedicalClinic' => array(
			'extends' => 'MedicalOrganization',
			'properties' => array(
				'availableService' => array(
					'expectedTypes' => array('MedicalProcedure', 'MedicalTest', 'MedicalTherapy')
				),
				'medicalSpecialty' => array(
					'expectedTypes' => array('MedicalSpecialty')
				)
			)
		),
		'Optician' => array(
			'extends' => 'MedicalOrganization',
			'properties' => array()
		),
		'Pharmacy' => array(
			'extends' => 'MedicalOrganization',
			'properties' => array()
		),
		'Physician' => array(
			'extends' => 'MedicalOrganization',
			'properties' => array(
				'availableService' => array(
					'expectedTypes' => array('MedicalProcedure', 'MedicalTest', 'MedicalTherapy')
				),
				'hospitalAffiliation' => array(
					'expectedTypes' => array('Hospital')
				),
				'medicalSpecialty' => array(
					'expectedTypes' => array('MedicalSpecialty')
				)
			)
		),
		'VeterinaryCare' => array(
			'extends' => 'MedicalOrganization',
			'properties' => array()
		),
		'ProfessionalService' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'Attorney' => array(
			'extends' => 'ProfessionalService',
			'properties' => array()
		),
		'Notary' => array(
			'extends' => 'ProfessionalService',
			'properties' => array()
		),
		'RadioStation' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'RealEstateAgent' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'RecyclingCenter' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'SelfStorage' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'ShoppingCenter' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'SportsActivityLocation' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'BowlingAlley' => array(
			'extends' => 'SportsActivityLocation',
			'properties' => array()
		),
		'ExerciseGym' => array(
			'extends' => 'SportsActivityLocation',
			'properties' => array()
		),
		'GolfCourse' => array(
			'extends' => 'SportsActivityLocation',
			'properties' => array()
		),
		'PublicSwimmingPool' => array(
			'extends' => 'SportsActivityLocation',
			'properties' => array()
		),
		'SkiResort' => array(
			'extends' => 'SportsActivityLocation',
			'properties' => array()
		),
		'SportsClub' => array(
			'extends' => 'SportsActivityLocation',
			'properties' => array()
		),
		'StadiumOrArena' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'TennisComplex' => array(
			'extends' => 'SportsActivityLocation',
			'properties' => array()
		),
		'Store' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'BikeStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'BookStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'ClothingStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'ComputerStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'ConvenienceStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'DepartmentStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'ElectronicsStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'Florist' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'FurnitureStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'GardenStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'GroceryStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'HardwareStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'HobbyShop' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'HomeGoodsStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'JewelryStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'LiquorStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'MensClothingStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'MobilePhoneStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'MovieRentalStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'MusicStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'OfficeEquipmentStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'OutletStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'PawnShop' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'PetStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'ShoeStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'SportingGoodsStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'TireShop' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'ToyStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'WholesaleStore' => array(
			'extends' => 'Store',
			'properties' => array()
		),
		'TelevisionStation' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'TouristInformationCenter' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'TravelAgency' => array(
			'extends' => 'LocalBusiness',
			'properties' => array()
		),
		'NGO' => array(
			'extends' => 'Organization',
			'properties' => array()
		),
		'PerformingGroup' => array(
			'extends' => 'Organization',
			'properties' => array()
		),
		'DanceGroup' => array(
			'extends' => 'PerformingGroup',
			'properties' => array()
		),
		'MusicGroup' => array(
			'extends' => 'PerformingGroup',
			'properties' => array(
				'album' => array(
					'expectedTypes' => array('MusicAlbum')
				),
				'albums' => array(
					'expectedTypes' => array('MusicAlbum')
				),
				'musicGroupMember' => array(
					'expectedTypes' => array('Person')
				),
				'track' => array(
					'expectedTypes' => array('MusicRecording')
				),
				'tracks' => array(
					'expectedTypes' => array('MusicRecording')
				)
			)
		),
		'TheaterGroup' => array(
			'extends' => 'PerformingGroup',
			'properties' => array()
		),
		'SportsTeam' => array(
			'extends' => 'Organization',
			'properties' => array()
		),
		'Person' => array(
			'extends' => 'Thing',
			'properties' => array(
				'additionalName' => array(
					'expectedTypes' => array('Text')
				),
				'address' => array(
					'expectedTypes' => array('PostalAddress')
				),
				'affiliation' => array(
					'expectedTypes' => array('Organization')
				),
				'alumniOf' => array(
					'expectedTypes' => array('EducationalOrganization')
				),
				'award' => array(
					'expectedTypes' => array('Text')
				),
				'awards' => array(
					'expectedTypes' => array('Text')
				),
				'birthDate' => array(
					'expectedTypes' => array('Date')
				),
				'brand' => array(
					'expectedTypes' => array('Brand', 'Organization')
				),
				'children' => array(
					'expectedTypes' => array('Person')
				),
				'colleague' => array(
					'expectedTypes' => array('Person')
				),
				'colleagues' => array(
					'expectedTypes' => array('Person')
				),
				'contactPoint' => array(
					'expectedTypes' => array('ContactPoint')
				),
				'contactPoints' => array(
					'expectedTypes' => array('ContactPoint')
				),
				'deathDate' => array(
					'expectedTypes' => array('Date')
				),
				'duns' => array(
					'expectedTypes' => array('Text')
				),
				'email' => array(
					'expectedTypes' => array('Text')
				),
				'familyName' => array(
					'expectedTypes' => array('Text')
				),
				'faxNumber' => array(
					'expectedTypes' => array('Text')
				),
				'follows' => array(
					'expectedTypes' => array('Person')
				),
				'gender' => array(
					'expectedTypes' => array('Text')
				),
				'givenName' => array(
					'expectedTypes' => array('Text')
				),
				'globalLocationNumber' => array(
					'expectedTypes' => array('Text')
				),
				'hasPOS' => array(
					'expectedTypes' => array('Place')
				),
				'homeLocation' => array(
					'expectedTypes' => array('ContactPoint', 'Place')
				),
				'honorificPrefix' => array(
					'expectedTypes' => array('Text')
				),
				'honorificSuffix' => array(
					'expectedTypes' => array('Text')
				),
				'interactionCount' => array(
					'expectedTypes' => array('Text')
				),
				'isicV4' => array(
					'expectedTypes' => array('Text')
				),
				'jobTitle' => array(
					'expectedTypes' => array('Text')
				),
				'knows' => array(
					'expectedTypes' => array('Person')
				),
				'makesOffer' => array(
					'expectedTypes' => array('Offer')
				),
				'memberOf' => array(
					'expectedTypes' => array('Organization')
				),
				'naics' => array(
					'expectedTypes' => array('Text')
				),
				'nationality' => array(
					'expectedTypes' => array('Country')
				),
				'owns' => array(
					'expectedTypes' => array('OwnershipInfo', 'Product')
				),
				'parent' => array(
					'expectedTypes' => array('Person')
				),
				'parents' => array(
					'expectedTypes' => array('Person')
				),
				'performerIn' => array(
					'expectedTypes' => array('Event')
				),
				'relatedTo' => array(
					'expectedTypes' => array('Person')
				),
				'seeks' => array(
					'expectedTypes' => array('Demand')
				),
				'sibling' => array(
					'expectedTypes' => array('Person')
				),
				'siblings' => array(
					'expectedTypes' => array('Person')
				),
				'spouse' => array(
					'expectedTypes' => array('Person')
				),
				'taxID' => array(
					'expectedTypes' => array('Text')
				),
				'telephone' => array(
					'expectedTypes' => array('Text')
				),
				'vatID' => array(
					'expectedTypes' => array('Text')
				),
				'workLocation' => array(
					'expectedTypes' => array('ContactPoint', 'Place')
				),
				'worksFor' => array(
					'expectedTypes' => array('Organization')
				)
			)
		),
		'Place' => array(
			'extends' => 'Thing',
			'properties' => array(
				'address' => array(
					'expectedTypes' => array('PostalAddress')
				),
				'aggregateRating' => array(
					'expectedTypes' => array('AggregateRating')
				),
				'containedIn' => array(
					'expectedTypes' => array('Place')
				),
				'event' => array(
					'expectedTypes' => array('Event')
				),
				'events' => array(
					'expectedTypes' => array('Event')
				),
				'faxNumber' => array(
					'expectedTypes' => array('Text')
				),
				'geo' => array(
					'expectedTypes' => array('GeoCoordinates', 'GeoShape')
				),
				'globalLocationNumber' => array(
					'expectedTypes' => array('Text')
				),
				'interactionCount' => array(
					'expectedTypes' => array('Text')
				),
				'isicV4' => array(
					'expectedTypes' => array('Text')
				),
				'logo' => array(
					'expectedTypes' => array('ImageObject', 'URL')
				),
				'map' => array(
					'expectedTypes' => array('URL')
				),
				'maps' => array(
					'expectedTypes' => array('URL')
				),
				'openingHoursSpecification' => array(
					'expectedTypes' => array('OpeningHoursSpecification')
				),
				'photo' => array(
					'expectedTypes' => array('ImageObject', 'Photograph')
				),
				'photos' => array(
					'expectedTypes' => array('ImageObject', 'Photograph')
				),
				'review' => array(
					'expectedTypes' => array('Review')
				),
				'reviews' => array(
					'expectedTypes' => array('Review')
				),
				'telephone' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'AdministrativeArea' => array(
			'extends' => 'Place',
			'properties' => array()
		),
		'City' => array(
			'extends' => 'AdministrativeArea',
			'properties' => array()
		),
		'Country' => array(
			'extends' => 'AdministrativeArea',
			'properties' => array()
		),
		'State' => array(
			'extends' => 'AdministrativeArea',
			'properties' => array()
		),
		'CivicStructure' => array(
			'extends' => 'Place',
			'properties' => array(
				'openingHours' => array(
					'expectedTypes' => array('Duration')
				)
			)
		),
		'Airport' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'Aquarium' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'Beach' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'BusStation' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'BusStop' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'Campground' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'Cemetery' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'Crematorium' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'EventVenue' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'GovernmentBuilding' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'CityHall' => array(
			'extends' => 'GovernmentBuilding',
			'properties' => array()
		),
		'Courthouse' => array(
			'extends' => 'GovernmentBuilding',
			'properties' => array()
		),
		'DefenceEstablishment' => array(
			'extends' => 'GovernmentBuilding',
			'properties' => array()
		),
		'Embassy' => array(
			'extends' => 'GovernmentBuilding',
			'properties' => array()
		),
		'LegislativeBuilding' => array(
			'extends' => 'GovernmentBuilding',
			'properties' => array()
		),
		'Museum' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'MusicVenue' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'Park' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'ParkingFacility' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'PerformingArtsTheater' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'PlaceOfWorship' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'BuddhistTemple' => array(
			'extends' => 'PlaceOfWorship',
			'properties' => array()
		),
		'CatholicChurch' => array(
			'extends' => 'PlaceOfWorship',
			'properties' => array()
		),
		'Church' => array(
			'extends' => 'PlaceOfWorship',
			'properties' => array()
		),
		'HinduTemple' => array(
			'extends' => 'PlaceOfWorship',
			'properties' => array()
		),
		'Mosque' => array(
			'extends' => 'PlaceOfWorship',
			'properties' => array()
		),
		'Synagogue' => array(
			'extends' => 'PlaceOfWorship',
			'properties' => array()
		),
		'Playground' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'RVPark' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'SubwayStation' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'TaxiStand' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'TrainStation' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'Zoo' => array(
			'extends' => 'CivicStructure',
			'properties' => array()
		),
		'Landform' => array(
			'extends' => 'Place',
			'properties' => array()
		),
		'BodyOfWater' => array(
			'extends' => 'Landform',
			'properties' => array()
		),
		'Canal' => array(
			'extends' => 'BodyOfWater',
			'properties' => array()
		),
		'LakeBodyOfWater' => array(
			'extends' => 'BodyOfWater',
			'properties' => array()
		),
		'OceanBodyOfWater' => array(
			'extends' => 'BodyOfWater',
			'properties' => array()
		),
		'Pond' => array(
			'extends' => 'BodyOfWater',
			'properties' => array()
		),
		'Reservoir' => array(
			'extends' => 'BodyOfWater',
			'properties' => array()
		),
		'RiverBodyOfWater' => array(
			'extends' => 'BodyOfWater',
			'properties' => array()
		),
		'SeaBodyOfWater' => array(
			'extends' => 'BodyOfWater',
			'properties' => array()
		),
		'Waterfall' => array(
			'extends' => 'BodyOfWater',
			'properties' => array()
		),
		'Continent' => array(
			'extends' => 'Landform',
			'properties' => array()
		),
		'Mountain' => array(
			'extends' => 'Landform',
			'properties' => array()
		),
		'Volcano' => array(
			'extends' => 'Landform',
			'properties' => array()
		),
		'LandmarksOrHistoricalBuildings' => array(
			'extends' => 'Place',
			'properties' => array()
		),
		'Residence' => array(
			'extends' => 'Place',
			'properties' => array()
		),
		'ApartmentComplex' => array(
			'extends' => 'Residence',
			'properties' => array()
		),
		'GatedResidenceCommunity' => array(
			'extends' => 'Residence',
			'properties' => array()
		),
		'SingleFamilyResidence' => array(
			'extends' => 'Residence',
			'properties' => array()
		),
		'TouristAttraction' => array(
			'extends' => 'Place',
			'properties' => array()
		),
		'Product' => array(
			'extends' => 'Thing',
			'properties' => array(
				'aggregateRating' => array(
					'expectedTypes' => array('AggregateRating')
				),
				'audience' => array(
					'expectedTypes' => array('Audience')
				),
				'brand' => array(
					'expectedTypes' => array('Brand', 'Organization')
				),
				'color' => array(
					'expectedTypes' => array('Text')
				),
				'depth' => array(
					'expectedTypes' => array('Distance', 'QuantitativeValue')
				),
				'gtin13' => array(
					'expectedTypes' => array('Text')
				),
				'gtin14' => array(
					'expectedTypes' => array('Text')
				),
				'gtin8' => array(
					'expectedTypes' => array('Text')
				),
				'height' => array(
					'expectedTypes' => array('Distance', 'QuantitativeValue')
				),
				'isAccessoryOrSparePartFor' => array(
					'expectedTypes' => array('Product')
				),
				'isConsumableFor' => array(
					'expectedTypes' => array('Product')
				),
				'isRelatedTo' => array(
					'expectedTypes' => array('Product')
				),
				'isSimilarTo' => array(
					'expectedTypes' => array('Product')
				),
				'itemCondition' => array(
					'expectedTypes' => array('OfferItemCondition')
				),
				'logo' => array(
					'expectedTypes' => array('ImageObject', 'URL')
				),
				'manufacturer' => array(
					'expectedTypes' => array('Organization')
				),
				'model' => array(
					'expectedTypes' => array('ProductModel', 'Text')
				),
				'mpn' => array(
					'expectedTypes' => array('Text')
				),
				'offers' => array(
					'expectedTypes' => array('Offer')
				),
				'productID' => array(
					'expectedTypes' => array('Text')
				),
				'releaseDate' => array(
					'expectedTypes' => array('Date')
				),
				'review' => array(
					'expectedTypes' => array('Review')
				),
				'reviews' => array(
					'expectedTypes' => array('Review')
				),
				'sku' => array(
					'expectedTypes' => array('Text')
				),
				'weight' => array(
					'expectedTypes' => array('QuantitativeValue')
				),
				'width' => array(
					'expectedTypes' => array('Distance', 'QuantitativeValue')
				)
			)
		),
		'IndividualProduct' => array(
			'extends' => 'Product',
			'properties' => array(
				'serialNumber' => array(
					'expectedTypes' => array('Text')
				)
			)
		),
		'ProductModel' => array(
			'extends' => 'Product',
			'properties' => array(
				'isVariantOf' => array(
					'expectedTypes' => array('ProductModel')
				),
				'predecessorOf' => array(
					'expectedTypes' => array('ProductModel')
				),
				'successorOf' => array(
					'expectedTypes' => array('ProductModel')
				)
			)
		),
		'SomeProducts' => array(
			'extends' => 'Product',
			'properties' => array(
				'inventoryLevel' => array(
					'expectedTypes' => array('QuantitativeValue')
				)
			)
		),
		'Property' => array(
			'extends' => 'Thing',
			'properties' => array(
				'domainIncludes' => array(
					'expectedTypes' => array('Class')
				),
				'rangeIncludes' => array(
					'expectedTypes' => array('Class')
				)
			)
		)
	);
}
