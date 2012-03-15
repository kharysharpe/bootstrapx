<?php
$type = 'text/css';
$files = array(
	//'../LICENSE-INFO.txt',
	// note that define is only included here as a means
	// to revert to the pre async include, and should not be
	// used in other build methods
    "jquery.mobile.core.css",
    "jquery.mobile.transitions.css",
    "jquery.mobile.transitions.fade.css",
    "jquery.mobile.transitions.pop.css",
    "jquery.mobile.transitions.slide.css",
    "jquery.mobile.transitions.slidedown.css",
    "jquery.mobile.transitions.slideup.css",
    "jquery.mobile.transitions.flip.css",
    "jquery.mobile.transitions.turn.css",
    "jquery.mobile.transitions.flow.css",

);

require_once('combine.php');
