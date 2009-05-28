<?php
	// iSearch DEMO v.0.1 - 05/23/2009
	// by imehesz@gmail.com (http://mehesz.net)
	
	// I found limonade couple of days ago (and iUI pretty much the same time)
	// wanted to create something very VERY simple, which helps me and
	// hopefully other people, to understand how the basic functionalities work
	// in this micro-framework

	// limonade - a PHP micro-framework ( http://www.sofa-design.net/limonade )
	// iUI - iPhone User Interface Framework ( http://code.google.com/p/iui/ )
	// download the source from http://mehesz.net/downloads/projects/isearch.zip

	// let's load the limonade lib
	include_once 'lib/limonade.php';

	// we call the menu_show() function if someone comes to /
	dispatch( '/', 'menu_show' );

	// calling the country_list 
	dispatch( '/country/list', 'country_list' );

	// we call the same function country_search() in both cases
	// POST and GET and that function will handle the rest
	dispatch( '/country/search', 'country_search' );
	dispatch_post( '/country/search', 'country_search_results' );
	// we use a POST method for example, but normally in REST, POST is
	// for creating new resource. So we should use a GET method here

	// let's run()
	run();
?>
