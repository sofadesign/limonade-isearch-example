<div id="search" title="search" class="panel">
	<form class="panel" action="index.php?/country/search" method="post">
	<h2>search for a country</h2>
        <fieldset>
            <div class="row">
                <label>name of the country</label>
                <input type="text" id="country" name="country" />
            </div>
            <div class="row">
                <label></label>
		<a class="whiteButton" href="#" type="submit">Search</a>
            </div>
        </fieldset>
	</form>
</div>

<?= $output; // we set this variable from the controller country.php ?>
