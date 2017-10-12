<?php declare(strict_types = 1);

if ( ! @get_headers('http://server')) {
	echo '<h1>Server is not running or is not linked correctly.</h1>';

	return;
}
echo file_get_contents('http://server');
