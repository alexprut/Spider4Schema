<?php
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
				'additionalType' => array('URL'),
				'alternateName' => array('Text'),
				'description' => array('Text'),
				'image' => array('URL'),
				'name' => array('Text'),
				'sameAs' => array('URL'),
				'url' => array('URL')
			)
		),
		'Action' => array(
			'extends' => 'Thing',
			'properties' => array(
				'agent' => array('Organization', 'Person'),
				'endTime' => array('DateTime'),
				'instrument' => array('Thing'),
				'location' => array('Place', 'PostalAddress'),
				'object' => array('Thing'),
				'participant' => array('Organization', 'Person'),
				'result' => array('Thing'),
				'startTime' => array('DateTime')
			)
		),
		'AchieveAction' => array(
			'extends' => 'Action',
			'properties' => array()
		),
		'LoseAction' => array(
			'extends' => 'AchieveAction',
			'properties' => array(
				'winner' => array('Person')
			)
		),
		'TieAction' => array(
			'extends' => 'AchieveAction',
			'properties' => array()
		),
		'WinAction' => array(
			'extends' => 'AchieveAction',
			'properties' => array(
				'loser' => array('Person')
			)
		),
		'AssessAction' => array(
			'extends' => 'Action',
			'properties' => array()
		),
		'ChooseAction' => array(
			'extends' => 'AssessAction',
			'properties' => array(
				'option' => array('Text', 'Thing')
			)
		),
		'VoteAction' => array(
			'extends' => 'ChooseAction',
			'properties' => array(
				'candidate' => array('Person')
			)
		),
		'IgnoreAction' => array(
			'extends' => 'AssessAction',
			'properties' => array()
		),
		'ReactAction' => array(
			'extends' => 'AssessAction',
			'properties' => array()
		),
		'AgreeAction' => array(
			'extends' => 'ReactAction',
			'properties' => array()
		),
		'DisagreeAction' => array(
			'extends' => 'ReactAction',
			'properties' => array()
		),
		'DislikeAction' => array(
			'extends' => 'ReactAction',
			'properties' => array()
		),
		'EndorseAction' => array(
			'extends' => 'ReactAction',
			'properties' => array(
				'endorsee' => array('Organization', 'Person')
			)
		),
		'LikeAction' => array(
			'extends' => 'ReactAction',
			'properties' => array()
		),
		'WantAction' => array(
			'extends' => 'ReactAction',
			'properties' => array()
		),
		'ReviewAction' => array(
			'extends' => 'AssessAction',
			'properties' => array(
				'resultReview' => array('Review')
			)
		),
		'ConsumeAction' => array(
			'extends' => 'Action',
			'properties' => array()
		),
		'DrinkAction' => array(
			'extends' => 'ConsumeAction',
			'properties' => array()
		),
		'EatAction' => array(
			'extends' => 'ConsumeAction',
			'properties' => array()
		),
		'InstallAction' => array(
			'extends' => 'ConsumeAction',
			'properties' => array()
		),
		'ListenAction' => array(
			'extends' => 'ConsumeAction',
			'properties' => array()
		),
		'ReadAction' => array(
			'extends' => 'ConsumeAction',
			'properties' => array()
		),
		'UseAction' => array(
			'extends' => 'ConsumeAction',
			'properties' => array()
		),
		'WearAction' => array(
			'extends' => 'UseAction',
			'properties' => array()
		),
		'ViewAction' => array(
			'extends' => 'ConsumeAction',
			'properties' => array()
		),
		'WatchAction' => array(
			'extends' => 'ConsumeAction',
			'properties' => array()
		),
		'CreateAction' => array(
			'extends' => 'Action',
			'properties' => array()
		),
		'CookAction' => array(
			'extends' => 'CreateAction',
			'properties' => array(
				'foodEstablishment' => array('FoodEstablishment', 'Place'),
				'foodEvent' => array('FoodEvent'),
				'recipe' => array('Recipe')
			)
		),
		'DrawAction' => array(
			'extends' => 'CreateAction',
			'properties' => array()
		),
		'FilmAction' => array(
			'extends' => 'CreateAction',
			'properties' => array()
		),
		'PaintAction' => array(
			'extends' => 'CreateAction',
			'properties' => array()
		),
		'PhotographAction' => array(
			'extends' => 'CreateAction',
			'properties' => array()
		),
		'WriteAction' => array(
			'extends' => 'CreateAction',
			'properties' => array(
				'language' => array('Language')
			)
		),
		'FindAction' => array(
			'extends' => 'Action',
			'properties' => array()
		),
		'CheckAction' => array(
			'extends' => 'FindAction',
			'properties' => array()
		),
		'DiscoverAction' => array(
			'extends' => 'FindAction',
			'properties' => array()
		),
		'TrackAction' => array(
			'extends' => 'FindAction',
			'properties' => array(
				'deliveryMethod' => array('DeliveryMethod')
			)
		),
		'InteractAction' => array(
			'extends' => 'Action',
			'properties' => array()
		),
		'BefriendAction' => array(
			'extends' => 'InteractAction',
			'properties' => array()
		),
		'CommunicateAction' => array(
			'extends' => 'InteractAction',
			'properties' => array(
				'about' => array('Thing'),
				'language' => array('Language'),
				'recipient' => array('Audience', 'Organization', 'Person')
			)
		),
		'AskAction' => array(
			'extends' => 'CommunicateAction',
			'properties' => array(
				'question' => array('Text')
			)
		),
		'CheckInAction' => array(
			'extends' => 'CommunicateAction',
			'properties' => array()
		),
		'CheckOutAction' => array(
			'extends' => 'CommunicateAction',
			'properties' => array()
		),
		'CommentAction' => array(
			'extends' => 'CommunicateAction',
			'properties' => array()
		),
		'InformAction' => array(
			'extends' => 'CommunicateAction',
			'properties' => array(
				'event' => array('Event')
			)
		),
		'ConfirmAction' => array(
			'extends' => 'InformAction',
			'properties' => array()
		),
		'RsvpAction' => array(
			'extends' => 'InformAction',
			'properties' => array()
		),
		'InviteAction' => array(
			'extends' => 'CommunicateAction',
			'properties' => array(
				'event' => array('Event')
			)
		),
		'ReplyAction' => array(
			'extends' => 'CommunicateAction',
			'properties' => array()
		),
		'ShareAction' => array(
			'extends' => 'CommunicateAction',
			'properties' => array()
		),
		'FollowAction' => array(
			'extends' => 'InteractAction',
			'properties' => array(
				'followee' => array('Organization', 'Person')
			)
		),
		'JoinAction' => array(
			'extends' => 'InteractAction',
			'properties' => array(
				'event' => array('Event')
			)
		),
		'LeaveAction' => array(
			'extends' => 'InteractAction',
			'properties' => array(
				'event' => array('Event')
			)
		),
		'MarryAction' => array(
			'extends' => 'InteractAction',
			'properties' => array()
		),
		'RegisterAction' => array(
			'extends' => 'InteractAction',
			'properties' => array()
		),
		'SubscribeAction' => array(
			'extends' => 'InteractAction',
			'properties' => array()
		),
		'UnRegisterAction' => array(
			'extends' => 'InteractAction',
			'properties' => array()
		),
		'MoveAction' => array(
			'extends' => 'Action',
			'properties' => array(
				'fromLocation' => array('Number', 'Place'),
				'toLocation' => array('Number', 'Place')
			)
		),
		'ArriveAction' => array(
			'extends' => 'MoveAction',
			'properties' => array()
		),
		'DepartAction' => array(
			'extends' => 'MoveAction',
			'properties' => array()
		),
		'TravelAction' => array(
			'extends' => 'MoveAction',
			'properties' => array(
				'distance' => array('Distance')
			)
		),
		'OrganizeAction' => array(
			'extends' => 'Action',
			'properties' => array()
		),
		'AllocateAction' => array(
			'extends' => 'OrganizeAction',
			'properties' => array(
				'purpose' => array('MedicalDevicePurpose', 'Thing')
			)
		),
		'AcceptAction' => array(
			'extends' => 'AllocateAction',
			'properties' => array()
		),
		'AssignAction' => array(
			'extends' => 'AllocateAction',
			'properties' => array()
		),
		'AuthorizeAction' => array(
			'extends' => 'AllocateAction',
			'properties' => array(
				'recipient' => array('Audience', 'Organization', 'Person')
			)
		),
		'RejectAction' => array(
			'extends' => 'AllocateAction',
			'properties' => array()
		),
		'ApplyAction' => array(
			'extends' => 'OrganizeAction',
			'properties' => array()
		),
		'BookmarkAction' => array(
			'extends' => 'OrganizeAction',
			'properties' => array()
		),
		'PlanAction' => array(
			'extends' => 'OrganizeAction',
			'properties' => array(
				'scheduledTime' => array('DateTime')
			)
		),
		'CancelAction' => array(
			'extends' => 'PlanAction',
			'properties' => array()
		),
		'ReserveAction' => array(
			'extends' => 'PlanAction',
			'properties' => array()
		),
		'ScheduleAction' => array(
			'extends' => 'PlanAction',
			'properties' => array()
		),
		'PlayAction' => array(
			'extends' => 'Action',
			'properties' => array(
				'audience' => array('Audience'),
				'event' => array('Event')
			)
		),
		'ExerciseAction' => array(
			'extends' => 'PlayAction',
			'properties' => array(
				'course' => array('Place'),
				'diet' => array('Diet'),
				'distance' => array('Distance'),
				'exercisePlan' => array('ExercisePlan'),
				'exerciseType' => array('Text'),
				'fromLocation' => array('Number', 'Place'),
				'oponent' => array('Person'),
				'sportsActivityLocation' => array('SportsActivityLocation'),
				'sportsEvent' => array('SportsEvent'),
				'sportsTeam' => array('SportsTeam'),
				'toLocation' => array('Number', 'Place')
			)
		),
		'PerformAction' => array(
			'extends' => 'PlayAction',
			'properties' => array(
				'entertainmentBusiness' => array('EntertainmentBusiness')
			)
		),
		'SearchAction' => array(
			'extends' => 'Action',
			'properties' => array(
				'query' => array('Class', 'Text')
			)
		),
		'TradeAction' => array(
			'extends' => 'Action',
			'properties' => array(
				'price' => array('Number', 'Text')
			)
		),
		'BuyAction' => array(
			'extends' => 'TradeAction',
			'properties' => array(
				'vendor' => array('Organization', 'Person'),
				'warrantyPromise' => array('WarrantyPromise')
			)
		),
		'DonateAction' => array(
			'extends' => 'TradeAction',
			'properties' => array(
				'recipient' => array('Audience', 'Organization', 'Person')
			)
		),
		'OrderAction' => array(
			'extends' => 'TradeAction',
			'properties' => array()
		),
		'PayAction' => array(
			'extends' => 'TradeAction',
			'properties' => array(
				'purpose' => array('MedicalDevicePurpose', 'Thing'),
				'recipient' => array('Audience', 'Organization', 'Person')
			)
		),
		'QuoteAction' => array(
			'extends' => 'TradeAction',
			'properties' => array()
		),
		'RentAction' => array(
			'extends' => 'TradeAction',
			'properties' => array(
				'landlord' => array('Organization', 'Person'),
				'realEstateAgent' => array('RealEstateAgent')
			)
		),
		'SellAction' => array(
			'extends' => 'TradeAction',
			'properties' => array(
				'buyer' => array('Person'),
				'warrantyPromise' => array('WarrantyPromise')
			)
		),
		'TipAction' => array(
			'extends' => 'TradeAction',
			'properties' => array(
				'recipient' => array('Audience', 'Organization', 'Person')
			)
		),
		'TransferAction' => array(
			'extends' => 'Action',
			'properties' => array(
				'fromLocation' => array('Number', 'Place'),
				'toLocation' => array('Number', 'Place')
			)
		),
		'BorrowAction' => array(
			'extends' => 'TransferAction',
			'properties' => array(
				'lender' => array('Person')
			)
		),
		'DownloadAction' => array(
			'extends' => 'TransferAction',
			'properties' => array()
		),
		'GiveAction' => array(
			'extends' => 'TransferAction',
			'properties' => array(
				'recipient' => array('Audience', 'Organization', 'Person')
			)
		),
		'LendAction' => array(
			'extends' => 'TransferAction',
			'properties' => array(
				'borrower' => array('Person')
			)
		),
		'ReceiveAction' => array(
			'extends' => 'TransferAction',
			'properties' => array(
				'deliveryMethod' => array('DeliveryMethod'),
				'sender' => array('Audience', 'Organization', 'Person')
			)
		),
		'ReturnAction' => array(
			'extends' => 'TransferAction',
			'properties' => array(
				'recipient' => array('Audience', 'Organization', 'Person')
			)
		),
		'SendAction' => array(
			'extends' => 'TransferAction',
			'properties' => array(
				'deliveryMethod' => array('DeliveryMethod'),
				'recipient' => array('Audience', 'Organization', 'Person')
			)
		),
		'TakeAction' => array(
			'extends' => 'TransferAction',
			'properties' => array()
		),
		'UpdateAction' => array(
			'extends' => 'Action',
			'properties' => array(
				'collection' => array('Thing')
			)
		),
		'AddAction' => array(
			'extends' => 'UpdateAction',
			'properties' => array()
		),
		'InsertAction' => array(
			'extends' => 'AddAction',
			'properties' => array(
				'toLocation' => array('Number', 'Place')
			)
		),
		'AppendAction' => array(
			'extends' => 'InsertAction',
			'properties' => array()
		),
		'PrependAction' => array(
			'extends' => 'InsertAction',
			'properties' => array()
		),
		'DeleteAction' => array(
			'extends' => 'UpdateAction',
			'properties' => array()
		),
		'ReplaceAction' => array(
			'extends' => 'UpdateAction',
			'properties' => array(
				'replacee' => array('Thing'),
				'replacer' => array('Thing')
			)
		),
		'BroadcastService' => array(
			'extends' => 'Thing',
			'properties' => array(
				'area' => array('Place'),
				'broadcaster' => array('Organization'),
				'parentService' => array('BroadcastService')
			)
		),
		'Class' => array(
			'extends' => 'Thing',
			'properties' => array()
		),
		'CreativeWork' => array(
			'extends' => 'Thing',
			'properties' => array(
				'about' => array('Thing'),
				'accessibilityAPI' => array('Text'),
				'accessibilityControl' => array('Text'),
				'accessibilityFeature' => array('Text'),
				'accessibilityHazard' => array('Text'),
				'accountablePerson' => array('Person'),
				'aggregateRating' => array('AggregateRating'),
				'alternativeHeadline' => array('Text'),
				'associatedMedia' => array('MediaObject'),
				'audience' => array('Audience'),
				'audio' => array('AudioObject'),
				'author' => array('Organization', 'Person'),
				'award' => array('Text'),
				'awards' => array('Text'),
				'citation' => array('CreativeWork', 'Text'),
				'comment' => array('UserComments'),
				'contentLocation' => array('Place'),
				'contentRating' => array('Text'),
				'contributor' => array('Organization', 'Person'),
				'copyrightHolder' => array('Organization', 'Person'),
				'copyrightYear' => array('Number'),
				'creator' => array('Organization', 'Person'),
				'dateCreated' => array('Date'),
				'dateModified' => array('Date'),
				'datePublished' => array('Date'),
				'discussionUrl' => array('URL'),
				'editor' => array('Person'),
				'educationalAlignment' => array('AlignmentObject'),
				'educationalUse' => array('Text'),
				'encoding' => array('MediaObject'),
				'encodings' => array('MediaObject'),
				'genre' => array('Text'),
				'headline' => array('Text'),
				'inLanguage' => array('Text'),
				'interactionCount' => array('Text'),
				'interactivityType' => array('Text'),
				'isBasedOnUrl' => array('URL'),
				'isFamilyFriendly' => array('Boolean'),
				'keywords' => array('Text'),
				'learningResourceType' => array('Text'),
				'mentions' => array('Thing'),
				'offers' => array('Offer'),
				'provider' => array('Organization', 'Person'),
				'publisher' => array('Organization'),
				'publishingPrinciples' => array('URL'),
				'review' => array('Review'),
				'reviews' => array('Review'),
				'sourceOrganization' => array('Organization'),
				'text' => array('Text'),
				'thumbnailUrl' => array('URL'),
				'timeRequired' => array('Duration'),
				'typicalAgeRange' => array('Text'),
				'version' => array('Number'),
				'video' => array('VideoObject')
			)
		),
		'Article' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'articleBody' => array('Text'),
				'articleSection' => array('Text'),
				'wordCount' => array('Integer')
			)
		),
		'BlogPosting' => array(
			'extends' => 'Article',
			'properties' => array()
		),
		'NewsArticle' => array(
			'extends' => 'Article',
			'properties' => array(
				'dateline' => array('Text'),
				'printColumn' => array('Text'),
				'printEdition' => array('Text'),
				'printPage' => array('Text'),
				'printSection' => array('Text')
			)
		),
		'ScholarlyArticle' => array(
			'extends' => 'Article',
			'properties' => array()
		),
		'MedicalScholarlyArticle' => array(
			'extends' => 'ScholarlyArticle',
			'properties' => array(
				'publicationType' => array('Text')
			)
		),
		'TechArticle' => array(
			'extends' => 'Article',
			'properties' => array(
				'dependencies' => array('Text'),
				'proficiencyLevel' => array('Text')
			)
		),
		'APIReference' => array(
			'extends' => 'TechArticle',
			'properties' => array(
				'assembly' => array('Text'),
				'assemblyVersion' => array('Text'),
				'programmingModel' => array('Text'),
				'targetPlatform' => array('Text')
			)
		),
		'Blog' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'blogPost' => array('BlogPosting'),
				'blogPosts' => array('BlogPosting')
			)
		),
		'Book' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'bookEdition' => array('Text'),
				'bookFormat' => array('BookFormatType'),
				'illustrator' => array('Person'),
				'isbn' => array('Text'),
				'numberOfPages' => array('Integer')
			)
		),
		'Clip' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'clipNumber' => array('Integer'),
				'partOfEpisode' => array('Episode'),
				'partOfSeason' => array('Season'),
				'partOfSeries' => array('Series'),
				'position' => array('Text'),
				'publication' => array('PublicationEvent')
			)
		),
		'RadioClip' => array(
			'extends' => 'Clip',
			'properties' => array()
		),
		'TVClip' => array(
			'extends' => 'Clip',
			'properties' => array(
				'partOfTVSeries' => array('TVSeries')
			)
		),
		'Code' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'codeRepository' => array('URL'),
				'programmingLanguage' => array('Thing'),
				'runtime' => array('Text'),
				'sampleType' => array('Text'),
				'targetProduct' => array('SoftwareApplication')
			)
		),
		'Comment' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'DataCatalog' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'dataset' => array('Dataset')
			)
		),
		'Dataset' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'catalog' => array('DataCatalog'),
				'distribution' => array('DataDownload'),
				'spatial' => array('Place'),
				'temporal' => array('DateTime')
			)
		),
		'Diet' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'dietFeatures' => array('Text'),
				'endorsers' => array('Organization', 'Person'),
				'expertConsiderations' => array('Text'),
				'overview' => array('Text'),
				'physiologicalBenefits' => array('Text'),
				'proprietaryName' => array('Text'),
				'risks' => array('Text')
			)
		),
		'Episode' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'actor' => array('Person'),
				'actors' => array('Person'),
				'director' => array('Person'),
				'directors' => array('Person'),
				'episodeNumber' => array('Integer'),
				'musicBy' => array('MusicGroup', 'Person'),
				'partOfSeason' => array('Season'),
				'partOfSeries' => array('Series'),
				'position' => array('Text'),
				'producer' => array('Person'),
				'productionCompany' => array('Organization'),
				'publication' => array('PublicationEvent'),
				'trailer' => array('VideoObject')
			)
		),
		'RadioEpisode' => array(
			'extends' => 'Episode',
			'properties' => array()
		),
		'TVEpisode' => array(
			'extends' => 'Episode',
			'properties' => array(
				'partOfTVSeries' => array('TVSeries')
			)
		),
		'ExercisePlan' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'activityDuration' => array('Duration'),
				'activityFrequency' => array('Text'),
				'additionalVariable' => array('Text'),
				'exerciseType' => array('Text'),
				'intensity' => array('Text'),
				'repetitions' => array('Number'),
				'restPeriods' => array('Text'),
				'workload' => array('Energy')
			)
		),
		'ItemList' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'itemListElement' => array('Text'),
				'itemListOrder' => array('Text')
			)
		),
		'Map' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'MediaObject' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'associatedArticle' => array('NewsArticle'),
				'bitrate' => array('Text'),
				'contentSize' => array('Text'),
				'contentUrl' => array('URL'),
				'duration' => array('Duration'),
				'embedUrl' => array('URL'),
				'encodesCreativeWork' => array('CreativeWork'),
				'encodingFormat' => array('Text'),
				'expires' => array('Date'),
				'height' => array('Distance', 'QuantitativeValue'),
				'playerType' => array('Text'),
				'productionCompany' => array('Organization'),
				'publication' => array('PublicationEvent'),
				'regionsAllowed' => array('Place'),
				'requiresSubscription' => array('Boolean'),
				'uploadDate' => array('Date'),
				'width' => array('Distance', 'QuantitativeValue')
			)
		),
		'AudioObject' => array(
			'extends' => 'MediaObject',
			'properties' => array(
				'transcript' => array('Text')
			)
		),
		'DataDownload' => array(
			'extends' => 'MediaObject',
			'properties' => array()
		),
		'ImageObject' => array(
			'extends' => 'MediaObject',
			'properties' => array(
				'caption' => array('Text'),
				'exifData' => array('Text'),
				'representativeOfPage' => array('Boolean'),
				'thumbnail' => array('ImageObject')
			)
		),
		'MusicVideoObject' => array(
			'extends' => 'MediaObject',
			'properties' => array()
		),
		'VideoObject' => array(
			'extends' => 'MediaObject',
			'properties' => array(
				'caption' => array('Text'),
				'thumbnail' => array('ImageObject'),
				'transcript' => array('Text'),
				'videoFrameSize' => array('Text'),
				'videoQuality' => array('Text')
			)
		),
		'Movie' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'actor' => array('Person'),
				'actors' => array('Person'),
				'director' => array('Person'),
				'directors' => array('Person'),
				'duration' => array('Duration'),
				'musicBy' => array('MusicGroup', 'Person'),
				'producer' => array('Person'),
				'productionCompany' => array('Organization'),
				'trailer' => array('VideoObject')
			)
		),
		'MusicPlaylist' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'numTracks' => array('Integer'),
				'track' => array('MusicRecording'),
				'tracks' => array('MusicRecording')
			)
		),
		'MusicAlbum' => array(
			'extends' => 'MusicPlaylist',
			'properties' => array(
				'byArtist' => array('MusicGroup')
			)
		),
		'MusicRecording' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'byArtist' => array('MusicGroup'),
				'duration' => array('Duration'),
				'inAlbum' => array('MusicAlbum'),
				'inPlaylist' => array('MusicPlaylist')
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
				'cookingMethod' => array('Text'),
				'cookTime' => array('Duration'),
				'ingredients' => array('Text'),
				'nutrition' => array('NutritionInformation'),
				'prepTime' => array('Duration'),
				'recipeCategory' => array('Text'),
				'recipeCuisine' => array('Text'),
				'recipeInstructions' => array('Text'),
				'recipeYield' => array('Text'),
				'totalTime' => array('Duration')
			)
		),
		'Review' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'itemReviewed' => array('Thing'),
				'reviewBody' => array('Text'),
				'reviewRating' => array('Rating')
			)
		),
		'Sculpture' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'Season' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'endDate' => array('Date'),
				'episode' => array('Episode'),
				'episodes' => array('Episode'),
				'numberOfEpisodes' => array('Number'),
				'partOfSeries' => array('Series'),
				'position' => array('Text'),
				'producer' => array('Person'),
				'productionCompany' => array('Organization'),
				'seasonNumber' => array('Integer'),
				'startDate' => array('Date'),
				'trailer' => array('VideoObject')
			)
		),
		'RadioSeason' => array(
			'extends' => 'Season',
			'properties' => array()
		),
		'TVSeason' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'partOfTVSeries' => array('TVSeries')
			)
		),
		'Series' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'actor' => array('Person'),
				'actors' => array('Person'),
				'director' => array('Person'),
				'directors' => array('Person'),
				'endDate' => array('Date'),
				'episode' => array('Episode'),
				'episodes' => array('Episode'),
				'musicBy' => array('MusicGroup', 'Person'),
				'numberOfEpisodes' => array('Number'),
				'numberOfSeasons' => array('Number'),
				'producer' => array('Person'),
				'productionCompany' => array('Organization'),
				'season' => array('Season'),
				'seasons' => array('Season'),
				'startDate' => array('Date'),
				'trailer' => array('VideoObject')
			)
		),
		'RadioSeries' => array(
			'extends' => 'Series',
			'properties' => array()
		),
		'TVSeries' => array(
			'extends' => 'CreativeWork',
			'properties' => array()
		),
		'SoftwareApplication' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'applicationCategory' => array('Text', 'URL'),
				'applicationSubCategory' => array('Text', 'URL'),
				'applicationSuite' => array('Text'),
				'countriesNotSupported' => array('Text'),
				'countriesSupported' => array('Text'),
				'device' => array('Text'),
				'downloadUrl' => array('URL'),
				'featureList' => array('Text', 'URL'),
				'fileFormat' => array('Text'),
				'fileSize' => array('Integer'),
				'installUrl' => array('URL'),
				'memoryRequirements' => array('Text', 'URL'),
				'operatingSystem' => array('Text'),
				'permissions' => array('Text'),
				'processorRequirements' => array('Text'),
				'releaseNotes' => array('Text', 'URL'),
				'requirements' => array('Text', 'URL'),
				'screenshot' => array('ImageObject', 'URL'),
				'softwareVersion' => array('Text'),
				'storageRequirements' => array('Text', 'URL')
			)
		),
		'MobileApplication' => array(
			'extends' => 'SoftwareApplication',
			'properties' => array(
				'carrierRequirements' => array('Text')
			)
		),
		'WebApplication' => array(
			'extends' => 'SoftwareApplication',
			'properties' => array(
				'browserRequirements' => array('Text')
			)
		),
		'WebPage' => array(
			'extends' => 'CreativeWork',
			'properties' => array(
				'breadcrumb' => array('Text'),
				'isPartOf' => array('CollectionPage'),
				'lastReviewed' => array('Date'),
				'mainContentOfPage' => array('WebPageElement'),
				'primaryImageOfPage' => array('ImageObject'),
				'relatedLink' => array('URL'),
				'reviewedBy' => array('Organization', 'Person'),
				'significantLink' => array('URL'),
				'significantLinks' => array('URL'),
				'specialty' => array('Specialty')
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
				'aspect' => array('Text')
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
				'attendee' => array('Organization', 'Person'),
				'attendees' => array('Organization', 'Person'),
				'doorTime' => array('DateTime'),
				'duration' => array('Duration'),
				'endDate' => array('Date'),
				'eventStatus' => array('EventStatusType'),
				'location' => array('Place', 'PostalAddress'),
				'offers' => array('Offer'),
				'performer' => array('Organization', 'Person'),
				'performers' => array('Organization', 'Person'),
				'previousStartDate' => array('Date'),
				'startDate' => array('Date'),
				'subEvent' => array('Event'),
				'subEvents' => array('Event'),
				'superEvent' => array('Event'),
				'typicalAgeRange' => array('Text')
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
		'DeliveryEvent' => array(
			'extends' => 'Event',
			'properties' => array(
				'accessCode' => array('Text'),
				'availableFrom' => array('DateTime'),
				'availableThrough' => array('DateTime'),
				'hasDeliveryMethod' => array('DeliveryMethod')
			)
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
		'PublicationEvent' => array(
			'extends' => 'Event',
			'properties' => array(
				'free' => array('Boolean'),
				'publishedOn' => array('BroadcastService')
			)
		),
		'BroadcastEvent' => array(
			'extends' => 'PublicationEvent',
			'properties' => array()
		),
		'OnDemandEvent' => array(
			'extends' => 'PublicationEvent',
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
				'commentText' => array('Text'),
				'commentTime' => array('Date'),
				'creator' => array('Organization', 'Person'),
				'discusses' => array('CreativeWork'),
				'replyToUrl' => array('URL')
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
				'alignmentType' => array('Text'),
				'educationalFramework' => array('Text'),
				'targetDescription' => array('Text'),
				'targetName' => array('Text'),
				'targetUrl' => array('URL')
			)
		),
		'Audience' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'audienceType' => array('Text'),
				'geographicArea' => array('AdministrativeArea')
			)
		),
		'BusinessAudience' => array(
			'extends' => 'Audience',
			'properties' => array(
				'numberofEmployees' => array('QuantitativeValue'),
				'yearlyRevenue' => array('QuantitativeValue'),
				'yearsInOperation' => array('QuantitativeValue')
			)
		),
		'EducationalAudience' => array(
			'extends' => 'Audience',
			'properties' => array(
				'educationalRole' => array('Text')
			)
		),
		'MedicalAudience' => array(
			'extends' => 'Audience',
			'properties' => array()
		),
		'PeopleAudience' => array(
			'extends' => 'Audience',
			'properties' => array(
				'healthCondition' => array('MedicalCondition'),
				'requiredGender' => array('Text'),
				'requiredMaxAge' => array('Integer'),
				'requiredMinAge' => array('Integer'),
				'suggestedGender' => array('Text'),
				'suggestedMaxAge' => array('Number'),
				'suggestedMinAge' => array('Number')
			)
		),
		'ParentAudience' => array(
			'extends' => 'PeopleAudience',
			'properties' => array(
				'childMaxAge' => array('Number'),
				'childMinAge' => array('Number')
			)
		),
		'Brand' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'logo' => array('ImageObject', 'URL')
			)
		),
		'Demand' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'acceptedPaymentMethod' => array('PaymentMethod'),
				'advanceBookingRequirement' => array('QuantitativeValue'),
				'availability' => array('ItemAvailability'),
				'availabilityEnds' => array('DateTime'),
				'availabilityStarts' => array('DateTime'),
				'availableAtOrFrom' => array('Place'),
				'availableDeliveryMethod' => array('DeliveryMethod'),
				'businessFunction' => array('BusinessFunction'),
				'deliveryLeadTime' => array('QuantitativeValue'),
				'eligibleCustomerType' => array('BusinessEntityType'),
				'eligibleDuration' => array('QuantitativeValue'),
				'eligibleQuantity' => array('QuantitativeValue'),
				'eligibleRegion' => array('GeoShape', 'Text'),
				'eligibleTransactionVolume' => array('PriceSpecification'),
				'gtin13' => array('Text'),
				'gtin14' => array('Text'),
				'gtin8' => array('Text'),
				'includesObject' => array('TypeAndQuantityNode'),
				'inventoryLevel' => array('QuantitativeValue'),
				'itemCondition' => array('OfferItemCondition'),
				'itemOffered' => array('Product'),
				'mpn' => array('Text'),
				'priceSpecification' => array('PriceSpecification'),
				'seller' => array('Organization', 'Person'),
				'serialNumber' => array('Text'),
				'sku' => array('Text'),
				'validFrom' => array('DateTime'),
				'validThrough' => array('DateTime'),
				'warranty' => array('WarrantyPromise')
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
		'ContactPointOption' => array(
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
		'LockerDelivery' => array(
			'extends' => 'DeliveryMethod',
			'properties' => array()
		),
		'OnSitePickup' => array(
			'extends' => 'DeliveryMethod',
			'properties' => array()
		),
		'ParcelService' => array(
			'extends' => 'DeliveryMethod',
			'properties' => array()
		),
		'EventStatusType' => array(
			'extends' => 'Enumeration',
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
		'OrderStatus' => array(
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
				'equal' => array('QualitativeValue'),
				'greater' => array('QualitativeValue'),
				'greaterOrEqual' => array('QualitativeValue'),
				'lesser' => array('QualitativeValue'),
				'lesserOrEqual' => array('QualitativeValue'),
				'nonEqual' => array('QualitativeValue'),
				'valueReference' => array('Enumeration', 'StructuredValue')
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
				'baseSalary' => array('Number'),
				'benefits' => array('Text'),
				'datePosted' => array('Date'),
				'educationRequirements' => array('Text'),
				'employmentType' => array('Text'),
				'experienceRequirements' => array('Text'),
				'hiringOrganization' => array('Organization'),
				'incentives' => array('Text'),
				'industry' => array('Text'),
				'jobLocation' => array('Place'),
				'occupationalCategory' => array('Text'),
				'qualifications' => array('Text'),
				'responsibilities' => array('Text'),
				'salaryCurrency' => array('Text'),
				'skills' => array('Text'),
				'specialCommitments' => array('Text'),
				'title' => array('Text'),
				'workHours' => array('Text')
			)
		),
		'Language' => array(
			'extends' => 'Intangible',
			'properties' => array()
		),
		'Offer' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'acceptedPaymentMethod' => array('PaymentMethod'),
				'addOn' => array('Offer'),
				'advanceBookingRequirement' => array('QuantitativeValue'),
				'aggregateRating' => array('AggregateRating'),
				'availability' => array('ItemAvailability'),
				'availabilityEnds' => array('DateTime'),
				'availabilityStarts' => array('DateTime'),
				'availableAtOrFrom' => array('Place'),
				'availableDeliveryMethod' => array('DeliveryMethod'),
				'businessFunction' => array('BusinessFunction'),
				'category' => array('PhysicalActivityCategory', 'Text', 'Thing'),
				'deliveryLeadTime' => array('QuantitativeValue'),
				'eligibleCustomerType' => array('BusinessEntityType'),
				'eligibleDuration' => array('QuantitativeValue'),
				'eligibleQuantity' => array('QuantitativeValue'),
				'eligibleRegion' => array('GeoShape', 'Text'),
				'eligibleTransactionVolume' => array('PriceSpecification'),
				'gtin13' => array('Text'),
				'gtin14' => array('Text'),
				'gtin8' => array('Text'),
				'includesObject' => array('TypeAndQuantityNode'),
				'inventoryLevel' => array('QuantitativeValue'),
				'itemCondition' => array('OfferItemCondition'),
				'itemOffered' => array('Product'),
				'mpn' => array('Text'),
				'price' => array('Number', 'Text'),
				'priceCurrency' => array('Text'),
				'priceSpecification' => array('PriceSpecification'),
				'priceValidUntil' => array('Date'),
				'review' => array('Review'),
				'reviews' => array('Review'),
				'seller' => array('Organization', 'Person'),
				'serialNumber' => array('Text'),
				'sku' => array('Text'),
				'validFrom' => array('DateTime'),
				'validThrough' => array('DateTime'),
				'warranty' => array('WarrantyPromise')
			)
		),
		'AggregateOffer' => array(
			'extends' => 'Offer',
			'properties' => array(
				'highPrice' => array('Number', 'Text'),
				'lowPrice' => array('Number', 'Text'),
				'offerCount' => array('Integer')
			)
		),
		'Order' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'acceptedOffer' => array('Offer'),
				'billingAddress' => array('PostalAddress'),
				'confirmationNumber' => array('Text'),
				'customer' => array('Organization', 'Person'),
				'discount' => array('Number', 'Text'),
				'discountCode' => array('Text'),
				'discountCurrency' => array('Text'),
				'isGift' => array('Boolean'),
				'merchant' => array('Organization', 'Person'),
				'orderDate' => array('DateTime'),
				'orderedItem' => array('Product'),
				'orderNumber' => array('Text'),
				'orderStatus' => array('OrderStatus'),
				'paymentDue' => array('DateTime'),
				'paymentMethod' => array('PaymentMethod'),
				'paymentMethodId' => array('Text'),
				'paymentUrl' => array('URL')
			)
		),
		'ParcelDelivery' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'carrier' => array('Organization'),
				'deliveryAddress' => array('PostalAddress'),
				'deliveryStatus' => array('DeliveryEvent'),
				'expectedArrivalFrom' => array('DateTime'),
				'expectedArrivalUntil' => array('DateTime'),
				'hasDeliveryMethod' => array('DeliveryMethod'),
				'itemShipped' => array('Product'),
				'originAddress' => array('PostalAddress'),
				'partOfOrder' => array('Order'),
				'trackingNumber' => array('Text'),
				'trackingUrl' => array('URL')
			)
		),
		'Permit' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'issuedBy' => array('Organization'),
				'issuedThrough' => array('Service'),
				'permitAudience' => array('Audience'),
				'validFor' => array('Duration'),
				'validFrom' => array('DateTime'),
				'validIn' => array('AdministrativeArea'),
				'validUntil' => array('Date')
			)
		),
		'GovernmentPermit' => array(
			'extends' => 'Permit',
			'properties' => array()
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
				'bestRating' => array('Number', 'Text'),
				'ratingValue' => array('Text'),
				'worstRating' => array('Number', 'Text')
			)
		),
		'AggregateRating' => array(
			'extends' => 'Rating',
			'properties' => array(
				'itemReviewed' => array('Thing'),
				'ratingCount' => array('Number'),
				'reviewCount' => array('Number')
			)
		),
		'Service' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'availableChannel' => array('ServiceChannel'),
				'produces' => array('Thing'),
				'provider' => array('Organization', 'Person'),
				'serviceArea' => array('AdministrativeArea'),
				'serviceAudience' => array('Audience'),
				'serviceType' => array('Text')
			)
		),
		'GovernmentService' => array(
			'extends' => 'Service',
			'properties' => array(
				'serviceOperator' => array('Organization')
			)
		),
		'ServiceChannel' => array(
			'extends' => 'Intangible',
			'properties' => array(
				'availableLanguage' => array('Language'),
				'processingTime' => array('Duration'),
				'providesService' => array('Service'),
				'serviceLocation' => array('Place'),
				'servicePhone' => array('ContactPoint'),
				'servicePostalAddress' => array('PostalAddress'),
				'serviceSmsNumber' => array('ContactPoint'),
				'serviceUrl' => array('URL')
			)
		),
		'StructuredValue' => array(
			'extends' => 'Intangible',
			'properties' => array()
		),
		'ContactPoint' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'areaServed' => array('AdministrativeArea'),
				'availableLanguage' => array('Language'),
				'contactOption' => array('ContactPointOption'),
				'contactType' => array('Text'),
				'email' => array('Text'),
				'faxNumber' => array('Text'),
				'hoursAvailable' => array('OpeningHoursSpecification'),
				'productSupported' => array('Product', 'Text'),
				'telephone' => array('Text')
			)
		),
		'PostalAddress' => array(
			'extends' => 'ContactPoint',
			'properties' => array(
				'addressCountry' => array('Country'),
				'addressLocality' => array('Text'),
				'addressRegion' => array('Text'),
				'postalCode' => array('Text'),
				'postOfficeBoxNumber' => array('Text'),
				'streetAddress' => array('Text')
			)
		),
		'GeoCoordinates' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'elevation' => array('Number', 'Text'),
				'latitude' => array('Number', 'Text'),
				'longitude' => array('Number', 'Text')
			)
		),
		'GeoShape' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'box' => array('Text'),
				'circle' => array('Text'),
				'elevation' => array('Number', 'Text'),
				'line' => array('Text'),
				'polygon' => array('Text')
			)
		),
		'NutritionInformation' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'calories' => array('Energy'),
				'carbohydrateContent' => array('Mass'),
				'cholesterolContent' => array('Mass'),
				'fatContent' => array('Mass'),
				'fiberContent' => array('Mass'),
				'proteinContent' => array('Mass'),
				'saturatedFatContent' => array('Mass'),
				'servingSize' => array('Text'),
				'sodiumContent' => array('Mass'),
				'sugarContent' => array('Mass'),
				'transFatContent' => array('Mass'),
				'unsaturatedFatContent' => array('Mass')
			)
		),
		'OpeningHoursSpecification' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'closes' => array('Time'),
				'dayOfWeek' => array('DayOfWeek'),
				'opens' => array('Time'),
				'validFrom' => array('DateTime'),
				'validThrough' => array('DateTime')
			)
		),
		'OwnershipInfo' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'acquiredFrom' => array('Organization', 'Person'),
				'ownedFrom' => array('DateTime'),
				'ownedThrough' => array('DateTime'),
				'typeOfGood' => array('Product')
			)
		),
		'PriceSpecification' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'eligibleQuantity' => array('QuantitativeValue'),
				'eligibleTransactionVolume' => array('PriceSpecification'),
				'maxPrice' => array('Number'),
				'minPrice' => array('Number'),
				'price' => array('Number', 'Text'),
				'priceCurrency' => array('Text'),
				'validFrom' => array('DateTime'),
				'validThrough' => array('DateTime'),
				'valueAddedTaxIncluded' => array('Boolean')
			)
		),
		'DeliveryChargeSpecification' => array(
			'extends' => 'PriceSpecification',
			'properties' => array(
				'appliesToDeliveryMethod' => array('DeliveryMethod'),
				'eligibleRegion' => array('GeoShape', 'Text')
			)
		),
		'PaymentChargeSpecification' => array(
			'extends' => 'PriceSpecification',
			'properties' => array(
				'appliesToDeliveryMethod' => array('DeliveryMethod'),
				'appliesToPaymentMethod' => array('PaymentMethod')
			)
		),
		'UnitPriceSpecification' => array(
			'extends' => 'PriceSpecification',
			'properties' => array(
				'billingIncrement' => array('Number'),
				'priceType' => array('Text'),
				'unitCode' => array('Text')
			)
		),
		'QuantitativeValue' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'maxValue' => array('Number'),
				'minValue' => array('Number'),
				'unitCode' => array('Text'),
				'value' => array('Number'),
				'valueReference' => array('Enumeration', 'StructuredValue')
			)
		),
		'TypeAndQuantityNode' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'amountOfThisGood' => array('Number'),
				'businessFunction' => array('BusinessFunction'),
				'typeOfGood' => array('Product'),
				'unitCode' => array('Text')
			)
		),
		'WarrantyPromise' => array(
			'extends' => 'StructuredValue',
			'properties' => array(
				'durationOfWarranty' => array('QuantitativeValue'),
				'warrantyScope' => array('WarrantyScope')
			)
		),
		'MedicalEntity' => array(
			'extends' => 'Thing',
			'properties' => array(
				'code' => array('MedicalCode'),
				'guideline' => array('MedicalGuideline'),
				'medicineSystem' => array('MedicineSystem'),
				'recognizingAuthority' => array('Organization'),
				'relevantSpecialty' => array('MedicalSpecialty'),
				'study' => array('MedicalStudy')
			)
		),
		'AnatomicalStructure' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'associatedPathophysiology' => array('Text'),
				'bodyLocation' => array('Text'),
				'connectedTo' => array('AnatomicalStructure'),
				'diagram' => array('ImageObject'),
				'function' => array('Text'),
				'partOfSystem' => array('AnatomicalSystem'),
				'relatedCondition' => array('MedicalCondition'),
				'relatedTherapy' => array('MedicalTherapy'),
				'subStructure' => array('AnatomicalStructure')
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
				'biomechnicalClass' => array('Text'),
				'functionalClass' => array('Text'),
				'structuralClass' => array('Text')
			)
		),
		'Ligament' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array()
		),
		'Muscle' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array(
				'action' => array('Text'),
				'antagonist' => array('Muscle'),
				'bloodSupply' => array('Vessel'),
				'insertion' => array('AnatomicalStructure'),
				'nerve' => array('Nerve'),
				'origin' => array('AnatomicalStructure')
			)
		),
		'Nerve' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array(
				'branch' => array('AnatomicalStructure', 'Nerve'),
				'nerveMotor' => array('Muscle'),
				'sensoryUnit' => array('AnatomicalStructure', 'SuperficialAnatomy'),
				'sourcedFrom' => array('BrainStructure')
			)
		),
		'Vessel' => array(
			'extends' => 'AnatomicalStructure',
			'properties' => array()
		),
		'Artery' => array(
			'extends' => 'Vessel',
			'properties' => array(
				'arterialBranch' => array('AnatomicalStructure'),
				'source' => array('AnatomicalStructure'),
				'supplyTo' => array('AnatomicalStructure')
			)
		),
		'LymphaticVessel' => array(
			'extends' => 'Vessel',
			'properties' => array(
				'originatesFrom' => array('Vessel'),
				'regionDrained' => array('AnatomicalStructure', 'AnatomicalSystem'),
				'runsTo' => array('Vessel')
			)
		),
		'Vein' => array(
			'extends' => 'Vessel',
			'properties' => array(
				'drainsTo' => array('Vessel'),
				'regionDrained' => array('AnatomicalStructure', 'AnatomicalSystem'),
				'tributary' => array('AnatomicalStructure')
			)
		),
		'AnatomicalSystem' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'associatedPathophysiology' => array('Text'),
				'comprisedOf' => array('AnatomicalStructure', 'AnatomicalSystem'),
				'relatedCondition' => array('MedicalCondition'),
				'relatedStructure' => array('AnatomicalStructure'),
				'relatedTherapy' => array('MedicalTherapy')
			)
		),
		'MedicalCause' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'causeOf' => array('MedicalEntity')
			)
		),
		'MedicalCondition' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'associatedAnatomy' => array('AnatomicalStructure', 'AnatomicalSystem', 'SuperficialAnatomy'),
				'cause' => array('MedicalCause'),
				'differentialDiagnosis' => array('DDxElement'),
				'epidemiology' => array('Text'),
				'expectedPrognosis' => array('Text'),
				'naturalProgression' => array('Text'),
				'pathophysiology' => array('Text'),
				'possibleComplication' => array('Text'),
				'possibleTreatment' => array('MedicalTherapy'),
				'primaryPrevention' => array('MedicalTherapy'),
				'riskFactor' => array('MedicalRiskFactor'),
				'secondaryPrevention' => array('MedicalTherapy'),
				'signOrSymptom' => array('MedicalSignOrSymptom'),
				'stage' => array('MedicalConditionStage'),
				'subtype' => array('Text'),
				'typicalTest' => array('MedicalTest')
			)
		),
		'InfectiousDisease' => array(
			'extends' => 'MedicalCondition',
			'properties' => array(
				'infectiousAgent' => array('Text'),
				'infectiousAgentClass' => array('InfectiousAgentClass'),
				'transmissionMethod' => array('Text')
			)
		),
		'MedicalContraindication' => array(
			'extends' => 'MedicalEntity',
			'properties' => array()
		),
		'MedicalDevice' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'adverseOutcome' => array('MedicalEntity'),
				'contraindication' => array('MedicalContraindication'),
				'indication' => array('MedicalIndication'),
				'postOp' => array('Text'),
				'preOp' => array('Text'),
				'procedure' => array('Text'),
				'purpose' => array('MedicalDevicePurpose', 'Thing'),
				'seriousAdverseOutcome' => array('MedicalEntity')
			)
		),
		'MedicalGuideline' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'evidenceLevel' => array('MedicalEvidenceLevel'),
				'evidenceOrigin' => array('Text'),
				'guidelineDate' => array('Date'),
				'guidelineSubject' => array('MedicalEntity')
			)
		),
		'MedicalGuidelineContraindication' => array(
			'extends' => 'MedicalGuideline',
			'properties' => array()
		),
		'MedicalGuidelineRecommendation' => array(
			'extends' => 'MedicalGuideline',
			'properties' => array(
				'recommendationStrength' => array('Text')
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
				'diagnosis' => array('MedicalCondition'),
				'distinguishingSign' => array('MedicalSignOrSymptom')
			)
		),
		'DoseSchedule' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'doseUnit' => array('Text'),
				'doseValue' => array('Number'),
				'frequency' => array('Text'),
				'targetPopulation' => array('Text')
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
				'applicableLocation' => array('AdministrativeArea'),
				'costCategory' => array('DrugCostCategory'),
				'costCurrency' => array('Text'),
				'costOrigin' => array('Text'),
				'costPerUnit' => array('Number', 'Text'),
				'drugUnit' => array('Text')
			)
		),
		'DrugLegalStatus' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'applicableLocation' => array('AdministrativeArea')
			)
		),
		'DrugStrength' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'activeIngredient' => array('Text'),
				'availableIn' => array('AdministrativeArea'),
				'strengthUnit' => array('Text'),
				'strengthValue' => array('Number')
			)
		),
		'MedicalCode' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'codeValue' => array('Text'),
				'codingSystem' => array('Text')
			)
		),
		'MedicalConditionStage' => array(
			'extends' => 'MedicalIntangible',
			'properties' => array(
				'stageAsNumber' => array('Number'),
				'subStageSuffix' => array('Text')
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
				'followup' => array('Text'),
				'howPerformed' => array('Text'),
				'preparation' => array('Text'),
				'procedureType' => array('MedicalProcedureType')
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
				'estimatesRiskOf' => array('MedicalEntity'),
				'includedRiskFactor' => array('MedicalRiskFactor')
			)
		),
		'MedicalRiskCalculator' => array(
			'extends' => 'MedicalRiskEstimator',
			'properties' => array()
		),
		'MedicalRiskScore' => array(
			'extends' => 'MedicalRiskEstimator',
			'properties' => array(
				'algorithm' => array('Text')
			)
		),
		'MedicalRiskFactor' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'increasesRiskOf' => array('MedicalEntity')
			)
		),
		'MedicalSignOrSymptom' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'cause' => array('MedicalCause'),
				'possibleTreatment' => array('MedicalTherapy')
			)
		),
		'MedicalSign' => array(
			'extends' => 'MedicalSignOrSymptom',
			'properties' => array(
				'identifyingExam' => array('PhysicalExam'),
				'identifyingTest' => array('MedicalTest')
			)
		),
		'MedicalSymptom' => array(
			'extends' => 'MedicalSignOrSymptom',
			'properties' => array()
		),
		'MedicalStudy' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'outcome' => array('Text'),
				'population' => array('Text'),
				'sponsor' => array('Organization'),
				'status' => array('MedicalStudyStatus'),
				'studyLocation' => array('AdministrativeArea'),
				'studySubject' => array('MedicalEntity')
			)
		),
		'MedicalObservationalStudy' => array(
			'extends' => 'MedicalStudy',
			'properties' => array(
				'studyDesign' => array('MedicalObservationalStudyDesign')
			)
		),
		'MedicalTrial' => array(
			'extends' => 'MedicalStudy',
			'properties' => array(
				'phase' => array('Text'),
				'trialDesign' => array('MedicalTrialDesign')
			)
		),
		'MedicalTest' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'affectedBy' => array('Drug'),
				'normalRange' => array('Text'),
				'signDetected' => array('MedicalSign'),
				'usedToDiagnose' => array('MedicalCondition'),
				'usesDevice' => array('MedicalDevice')
			)
		),
		'BloodTest' => array(
			'extends' => 'MedicalTest',
			'properties' => array()
		),
		'ImagingTest' => array(
			'extends' => 'MedicalTest',
			'properties' => array(
				'imagingTechnique' => array('MedicalImagingTechnique')
			)
		),
		'MedicalTestPanel' => array(
			'extends' => 'MedicalTest',
			'properties' => array(
				'subTest' => array('MedicalTest')
			)
		),
		'PathologyTest' => array(
			'extends' => 'MedicalTest',
			'properties' => array(
				'tissueSample' => array('Text')
			)
		),
		'MedicalTherapy' => array(
			'extends' => 'MedicalEntity',
			'properties' => array(
				'adverseOutcome' => array('MedicalEntity'),
				'contraindication' => array('MedicalContraindication'),
				'duplicateTherapy' => array('MedicalTherapy'),
				'indication' => array('MedicalIndication'),
				'seriousAdverseOutcome' => array('MedicalEntity')
			)
		),
		'DietarySupplement' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array(
				'activeIngredient' => array('Text'),
				'background' => array('Text'),
				'dosageForm' => array('Text'),
				'isProprietary' => array('Boolean'),
				'legalStatus' => array('DrugLegalStatus'),
				'manufacturer' => array('Organization'),
				'maximumIntake' => array('MaximumDoseSchedule'),
				'mechanismOfAction' => array('Text'),
				'nonProprietaryName' => array('Text'),
				'recommendedIntake' => array('RecommendedDoseSchedule'),
				'safetyConsideration' => array('Text'),
				'targetPopulation' => array('Text')
			)
		),
		'Drug' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array(
				'activeIngredient' => array('Text'),
				'administrationRoute' => array('Text'),
				'alcoholWarning' => array('Text'),
				'availableStrength' => array('DrugStrength'),
				'breastfeedingWarning' => array('Text'),
				'clincalPharmacology' => array('Text'),
				'cost' => array('DrugCost'),
				'dosageForm' => array('Text'),
				'doseSchedule' => array('DoseSchedule'),
				'drugClass' => array('DrugClass'),
				'foodWarning' => array('Text'),
				'interactingDrug' => array('Drug'),
				'isAvailableGenerically' => array('Boolean'),
				'isProprietary' => array('Boolean'),
				'labelDetails' => array('URL'),
				'legalStatus' => array('DrugLegalStatus'),
				'manufacturer' => array('Organization'),
				'mechanismOfAction' => array('Text'),
				'nonProprietaryName' => array('Text'),
				'overdosage' => array('Text'),
				'pregnancyCategory' => array('DrugPregnancyCategory'),
				'pregnancyWarning' => array('Text'),
				'prescribingInfo' => array('URL'),
				'prescriptionStatus' => array('DrugPrescriptionStatus'),
				'relatedDrug' => array('Drug'),
				'warning' => array('Text', 'URL')
			)
		),
		'DrugClass' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array(
				'drug' => array('Drug')
			)
		),
		'LifestyleModification' => array(
			'extends' => 'MedicalTherapy',
			'properties' => array()
		),
		'PhysicalActivity' => array(
			'extends' => 'LifestyleModification',
			'properties' => array(
				'associatedAnatomy' => array('AnatomicalStructure', 'AnatomicalSystem', 'SuperficialAnatomy'),
				'category' => array('PhysicalActivityCategory', 'Text', 'Thing'),
				'epidemiology' => array('Text'),
				'pathophysiology' => array('Text')
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
				'associatedPathophysiology' => array('Text'),
				'relatedAnatomy' => array('AnatomicalStructure', 'AnatomicalSystem'),
				'relatedCondition' => array('MedicalCondition'),
				'relatedTherapy' => array('MedicalTherapy'),
				'significance' => array('Text')
			)
		),
		'Organization' => array(
			'extends' => 'Thing',
			'properties' => array(
				'address' => array('PostalAddress'),
				'aggregateRating' => array('AggregateRating'),
				'brand' => array('Brand', 'Organization'),
				'contactPoint' => array('ContactPoint'),
				'contactPoints' => array('ContactPoint'),
				'department' => array('Organization'),
				'duns' => array('Text'),
				'email' => array('Text'),
				'employee' => array('Person'),
				'employees' => array('Person'),
				'event' => array('Event'),
				'events' => array('Event'),
				'faxNumber' => array('Text'),
				'founder' => array('Person'),
				'founders' => array('Person'),
				'foundingDate' => array('Date'),
				'globalLocationNumber' => array('Text'),
				'hasPOS' => array('Place'),
				'interactionCount' => array('Text'),
				'isicV4' => array('Text'),
				'legalName' => array('Text'),
				'location' => array('Place', 'PostalAddress'),
				'logo' => array('ImageObject', 'URL'),
				'makesOffer' => array('Offer'),
				'member' => array('Organization', 'Person'),
				'members' => array('Organization', 'Person'),
				'naics' => array('Text'),
				'owns' => array('OwnershipInfo', 'Product'),
				'review' => array('Review'),
				'reviews' => array('Review'),
				'seeks' => array('Demand'),
				'subOrganization' => array('Organization'),
				'taxID' => array('Text'),
				'telephone' => array('Text'),
				'vatID' => array('Text')
			)
		),
		'Corporation' => array(
			'extends' => 'Organization',
			'properties' => array(
				'tickerSymbol' => array('Text')
			)
		),
		'EducationalOrganization' => array(
			'extends' => 'Organization',
			'properties' => array(
				'alumni' => array('Person')
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
				'branchOf' => array('Organization'),
				'currenciesAccepted' => array('Text'),
				'openingHours' => array('Duration'),
				'paymentAccepted' => array('Text'),
				'priceRange' => array('Text')
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
				'availableService' => array('MedicalProcedure', 'MedicalTest', 'MedicalTherapy'),
				'medicalSpecialty' => array('MedicalSpecialty')
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
				'acceptsReservations' => array('Text', 'URL'),
				'menu' => array('Text', 'URL'),
				'servesCuisine' => array('Text')
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
				'availableTest' => array('MedicalTest')
			)
		),
		'MedicalClinic' => array(
			'extends' => 'MedicalOrganization',
			'properties' => array(
				'availableService' => array('MedicalProcedure', 'MedicalTest', 'MedicalTherapy'),
				'medicalSpecialty' => array('MedicalSpecialty')
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
				'availableService' => array('MedicalProcedure', 'MedicalTest', 'MedicalTherapy'),
				'hospitalAffiliation' => array('Hospital'),
				'medicalSpecialty' => array('MedicalSpecialty')
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
				'album' => array('MusicAlbum'),
				'albums' => array('MusicAlbum'),
				'musicGroupMember' => array('Person'),
				'track' => array('MusicRecording'),
				'tracks' => array('MusicRecording')
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
				'additionalName' => array('Text'),
				'address' => array('PostalAddress'),
				'affiliation' => array('Organization'),
				'alumniOf' => array('EducationalOrganization'),
				'award' => array('Text'),
				'awards' => array('Text'),
				'birthDate' => array('Date'),
				'brand' => array('Brand', 'Organization'),
				'children' => array('Person'),
				'colleague' => array('Person'),
				'colleagues' => array('Person'),
				'contactPoint' => array('ContactPoint'),
				'contactPoints' => array('ContactPoint'),
				'deathDate' => array('Date'),
				'duns' => array('Text'),
				'email' => array('Text'),
				'familyName' => array('Text'),
				'faxNumber' => array('Text'),
				'follows' => array('Person'),
				'gender' => array('Text'),
				'givenName' => array('Text'),
				'globalLocationNumber' => array('Text'),
				'hasPOS' => array('Place'),
				'homeLocation' => array('ContactPoint', 'Place'),
				'honorificPrefix' => array('Text'),
				'honorificSuffix' => array('Text'),
				'interactionCount' => array('Text'),
				'isicV4' => array('Text'),
				'jobTitle' => array('Text'),
				'knows' => array('Person'),
				'makesOffer' => array('Offer'),
				'memberOf' => array('Organization'),
				'naics' => array('Text'),
				'nationality' => array('Country'),
				'owns' => array('OwnershipInfo', 'Product'),
				'parent' => array('Person'),
				'parents' => array('Person'),
				'performerIn' => array('Event'),
				'relatedTo' => array('Person'),
				'seeks' => array('Demand'),
				'sibling' => array('Person'),
				'siblings' => array('Person'),
				'spouse' => array('Person'),
				'taxID' => array('Text'),
				'telephone' => array('Text'),
				'vatID' => array('Text'),
				'workLocation' => array('ContactPoint', 'Place'),
				'worksFor' => array('Organization')
			)
		),
		'Place' => array(
			'extends' => 'Thing',
			'properties' => array(
				'address' => array('PostalAddress'),
				'aggregateRating' => array('AggregateRating'),
				'containedIn' => array('Place'),
				'event' => array('Event'),
				'events' => array('Event'),
				'faxNumber' => array('Text'),
				'geo' => array('GeoCoordinates', 'GeoShape'),
				'globalLocationNumber' => array('Text'),
				'interactionCount' => array('Text'),
				'isicV4' => array('Text'),
				'logo' => array('ImageObject', 'URL'),
				'map' => array('URL'),
				'maps' => array('URL'),
				'openingHoursSpecification' => array('OpeningHoursSpecification'),
				'photo' => array('ImageObject', 'Photograph'),
				'photos' => array('ImageObject', 'Photograph'),
				'review' => array('Review'),
				'reviews' => array('Review'),
				'telephone' => array('Text')
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
				'openingHours' => array('Duration')
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
				'aggregateRating' => array('AggregateRating'),
				'audience' => array('Audience'),
				'brand' => array('Brand', 'Organization'),
				'color' => array('Text'),
				'depth' => array('Distance', 'QuantitativeValue'),
				'gtin13' => array('Text'),
				'gtin14' => array('Text'),
				'gtin8' => array('Text'),
				'height' => array('Distance', 'QuantitativeValue'),
				'isAccessoryOrSparePartFor' => array('Product'),
				'isConsumableFor' => array('Product'),
				'isRelatedTo' => array('Product'),
				'isSimilarTo' => array('Product'),
				'itemCondition' => array('OfferItemCondition'),
				'logo' => array('ImageObject', 'URL'),
				'manufacturer' => array('Organization'),
				'model' => array('ProductModel', 'Text'),
				'mpn' => array('Text'),
				'offers' => array('Offer'),
				'productID' => array('Text'),
				'releaseDate' => array('Date'),
				'review' => array('Review'),
				'reviews' => array('Review'),
				'sku' => array('Text'),
				'weight' => array('QuantitativeValue'),
				'width' => array('Distance', 'QuantitativeValue')
			)
		),
		'IndividualProduct' => array(
			'extends' => 'Product',
			'properties' => array(
				'serialNumber' => array('Text')
			)
		),
		'ProductModel' => array(
			'extends' => 'Product',
			'properties' => array(
				'isVariantOf' => array('ProductModel'),
				'predecessorOf' => array('ProductModel'),
				'successorOf' => array('ProductModel')
			)
		),
		'SomeProducts' => array(
			'extends' => 'Product',
			'properties' => array(
				'inventoryLevel' => array('QuantitativeValue')
			)
		),
		'Property' => array(
			'extends' => 'Thing',
			'properties' => array(
				'domainIncludes' => array('Class'),
				'rangeIncludes' => array('Class')
			)
		)
	);
}
