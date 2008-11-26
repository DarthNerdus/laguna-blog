<?php

// Configuration for URLs and filesystem paths.
// * Do not use trailing slashes.

// Output paths:

$publishDir = "/www/stevenf/lagoogle";				// Index page and RSS feed will go here
$archiveDir = "$publishDir/archive";		// Archive pages will go here

// Paths required by this script:

$baseDir = "/www/stevenf/lagoogle";			// Laguna's root directory
$binDir = "$baseDir/bin";					// Path to Laguna's internal scripts
$pagesDir = "$baseDir/pages";				// Location of source files for posts
$templatesDir = "$baseDir/templates";		// Location of output templates

// URLs:

$baseURL = "http://stevenf.com/lagoogle";			// Base URL of web site
$archiveURL = "http://stevenf.com/lagoogle/archive";	// Base URL equivalent of archiveDir

// Other configurable options:

$bylineDateFormat = "F j, Y";				// Date format for post bylines
$bylineTimeFormat = "g:i A";				// Time format for post bylines
$inputFileExtension = ".txt";				// File extension on files in 'pages' dir
$outputFileExtension = ".php";				// File extension to use for published pages
$defaultPageTitle = "Untitled";				// Used if the page has no 'Title:' metadata
$maxIndexPagePosts = 5;						// Maximum # of posts to put on the index page
$maxRSSItems = 15;
$indexPageTitle = "Home";					// Title to use for the index page
$archivePageTitle = "Archive";				// Title to use for the archive index page
$rssFilename = "index.xml";					// Filename to use for RSS feed
$timezone = "PST";							// Used for RSS timestamps

// RSS template fields:

$rssTitle = "My RSS Feed";
$rssLink = $baseURL . "/";
$rssGenerator = $baseURL . "/";
$rssDesc = "This is the RSS feed for my blog.";
$rssCopyright = "Copyright 2002-2008";
$rssLang = "en";

// Editor stuff

define('BASE_PATH', getcwd());					// Omit any trailing slash

// The path to the raw text documents maintained by W2
define('PAGES_PATH', $pagesDir);					// Omit any trailing slash
define('BASE_URI', 'http://stevenf.com/laguna2/bin');	// Omit any trailing slash
define('SELF', BASE_URI . '/edit.php');

/*
// The name of the page to show as the "Home" page.
// Value is a string, the title of a page (case-sensitive!)
define('DEFAULT_PAGE', 'Home');

// The CSS file to load to style the wiki.
// You can take the default, modify it, and save it under a new name in this directory - then change the value below.
// Value is a string, the name and/or relative filesystem path to a CSS file.
*/

define('CSS_FILE', '../../css/default.css');
define('DISABLE_UPLOADS', false);
define('VALID_UPLOAD_TYPES', 'image/jpeg,image/pjpeg,image/png,image/gif,application/pdf,application/zip,application/x-diskcopy');
define('VALID_UPLOAD_EXTS', 'jpg,jpeg,png,gif,pdf,zip,dmg');

define('TITLE_DATE', 'j-M-Y g:i A');

define('EDIT_ROWS', 30);

define('REQUIRE_PASSWORD', true);
define('W2_PASSWORD', 'secret');

?>