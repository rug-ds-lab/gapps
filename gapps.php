<?php

Markup('gappsyoutube', 'fulltext','/\\(:youtube (\\S+):\\)/', "embedYoutube");
Markup('gappsmaps',    'fulltext','/\\(:maps (\\S+):\\)/',    "embedMaps");

function embedYoutube($m) {
	return Keep('<iframe class="embed" src="https://www.youtube.com/embed/' . $m[1] . '" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
}

function embedMaps($m) {
	global $google_api_key;
	return Keep('<iframe class="embed" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:' . $m[1] . '&key=' . $google_api_key . '" allowfullscreen></iframe>');
}

?>