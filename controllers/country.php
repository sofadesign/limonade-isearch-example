<?php
	// this is the country controller, since limonade does not forcing
	// naming conventions, you can call the controllers whatever you'd like
	// (if there is one, I just missed it, then Ooops. sorry)

	// listing the countries, obviously would be much nicer
	// if we used a database but for simplicity's sake we didn't
	function country_list()
	{
		$countries = array();
		$group = '';
		foreach( _get_countries() as $country )
		{
			$first_letter = $country[0];
			if( $first_letter != $group )
			{
				$countries[] = array($first_letter);
				$group = $first_letter;
			}
			$countries[] = $country;
		}
    set('countries', $countries);
		return render('country_list.tpl.php');
	}

  # GET /country/search
	function country_search()
	{
		return html( 'country_search.tpl.php' );
	}
	
	# POST /country/search
	function country_search_results()
	{
		$countries = array();
		foreach( _get_countries() as $country )
		{
			if( preg_match( '/^' . $_POST[ 'country' ] . '/i', $country ) )
			{
				$countries[] = $country;
			}
		}
		set('countries', $countries);
		return html( 'country_search_results.tpl.php' );
	}

	// and some countries, sorted by name ;)
	function _get_countries()
	{
		$countries = array(
				"USA", "Western Sahara", "Viet Nam", "Yemen", "Zambia",
				"Hungary", "Uganda", "Uruguay", "Vanuatu", "Venezulela",
				"France", "Sweden", "Taiwan", "Thailand", "Togo", "Turkey",
				"Germany", "Quatar", "Sahara", "Samoa", "Senegal", "Serbia",
				"United Kingdom", "Norway", "Pakistan", "Palau", "Paraguay",
				"Russia", "Nepal","Nederlands","Nauru","Nigeria","Oman",
				"Cuba","Malawi","Madagascar","Malaysia","Luxembourg","Liberia",
				"Mexico","Jamaica","Japan","Kosovo","Kuwait","Kenya","Kazakhstan",
				"Poland", "Haiti","Honduras","India","Iraq","Ireland","Israel",
				"Austria","Denmark","Ethiopia","Fiji","Gabon","Georgia","Grenada",
				"Spain","Congo","Costa Rica","Cyprus","Dominica","Ecuador",
				"Australia","Argentina","Belarus","Belgium","Brazil"
		);

		sort( $countries );

		return $countries;
	}

?>
