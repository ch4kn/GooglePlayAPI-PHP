<?php
require 'flight/Flight.php';
require 'flight/simple_html_dom.php';
require 'flight/playUp.php';

use flight\playUp;

Flight::route('/get/reviews/@package', function($package){
    playUp::reviewscheck($package);
});

Flight::route('/get/package/@package', function($package){
    playUp::packagecheck($package);
});

Flight::map('notFound', function () {
	Flight::redirect("/");
});

Flight::start();