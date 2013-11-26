<?php


/* Required Functions */

// Namespace Check
include_once('includes/etc/namespace.php');

function optionsframework_options() {

// Default Presets
include_once('includes/etc/presets.php');


/* Options Panels */

// Enable 'Basic 1' Options Panel
include_once('includes/panels/panel_basic_1.php');

// Enable 'Advanced 1' Options Panel
include_once('includes/panels/panel_advanced_1.php');

// Enable 'Advanced 2' Options Panel
include_once('includes/panels/panel_advanced_2.php');

// Enable 'Text Editor 1' Options Panel
include_once('includes/panels/panel_text_editor_1.php');


/* Finish */

	return $options;
}