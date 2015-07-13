<?php // Adjust settings here before going live

function site_url(){
	return 'http://somesite.com'; // URL of website, no trailing slash!
}

function pageTitle(){
	global $pagename;
	return ucwords(str_replace('-',' ',$pagename)) . ' | Name of Company';
}

if(empty($pagename)) $pagename = "none"; // Used for determining page-specific styles and conditionals

?>