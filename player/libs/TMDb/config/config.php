<?php


goto label1;

label1:

$af98337fbd3c3a9c['apikey'] = '';
$af98337fbd3c3a9c['lang'] = 'en';
$af98337fbd3c3a9c['adult'] = false;
$af98337fbd3c3a9c['debug'] = false;
$af98337fbd3c3a9c['appender']['movie'] = [
	'default' => ['trailers', 'images', 'credits', 'translations', 'reviews'],
	'all'     => ['account_states', 'alternative_titles', 'credits', 'images', 'keywords', 'release_dates', 'videos', 'translations', 'similar', 'reviews', 'lists', 'changes', 'rating']
];
goto label13;

label13:

$af98337fbd3c3a9c['appender']['tvshow'] = [
	'default' => ['trailers', 'images', 'credits', 'translations', 'keywords'],
	'all'     => ['account_states', 'alternative_titles', 'changes', 'content_rating', 'credits', 'external_ids', 'images', 'keywords', 'rating', 'similar', 'translations', 'videos']
];
$af98337fbd3c3a9c['appender']['season'] = [
	'default' => ['trailers', 'images', 'credits', 'translations'],
	'all'     => ['changes', 'account_states', 'credits', 'external_ids', 'images', 'videos']
];
$af98337fbd3c3a9c['appender']['episode'] = [
	'default' => ['trailers', 'images', 'credits', 'translations'],
	'all'     => ['changes', 'account_states', 'credits', 'external_ids', 'images', 'rating', 'videos']
];
$af98337fbd3c3a9c['appender']['person'] = [
	'default' => ['movie_credits', 'tv_credits', 'images'],
	'all'     => ['movie_credits', 'tv_credits', 'combined_credits', 'external_ids', 'images', 'tagged_images', 'changes']
];
$af98337fbd3c3a9c['appender']['collection'] = [
	'default' => ['images'],
	'all'     => ['images']
];
goto label29;

label29:

$af98337fbd3c3a9c['appender']['company'] = [
	'default' => ['movies'],
	'all'     => ['movies']
];

?>