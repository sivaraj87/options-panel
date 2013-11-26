<?php

	$options[] = array(
		'name' => __('Basic 1', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Input Text Mini', 'options_check'),
		'desc' => __('A mini text input field.', 'options_check'),
		'id' => 'panel_basic_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text');

	$options[] = array(
		'name' => __('Input Text', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'panel_basic_text',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Textarea', 'options_check'),
		'desc' => __('Textarea description.', 'options_check'),
		'id' => 'panel_basic_textarea',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Input Select Small', 'options_check'),
		'desc' => __('Small Select Box.', 'options_check'),
		'id' => 'panel_basic_select',
		'std' => 'three',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $test_array);

	$options[] = array(
		'name' => __('Input Select Wide', 'options_check'),
		'desc' => __('A wider select box.', 'options_check'),
		'id' => 'panel_basic_select_wide',
		'std' => 'two',
		'type' => 'select',
		'options' => $test_array);

	$options[] = array(
		'name' => __('Select a Category', 'options_check'),
		'desc' => __('Passed an array of categories with cat_ID and cat_name', 'options_check'),
		'id' => 'panel_basic_select_categories',
		'type' => 'select',
		'options' => $options_categories);

	$options[] = array(
		'name' => __('Select a Tag', 'options_check'),
		'desc' => __('Passed an array of tags with term_id and term_name', 'options_check'),
		'id' => 'panel_basic_select_tags',
		'type' => 'select',
		'options' => $options_tags);

	$options[] = array(
		'name' => __('Select a Page', 'options_check'),
		'desc' => __('Passed an array of pages with ID and post_title', 'options_check'),
		'id' => 'panel_basic_select_pages',
		'type' => 'select',
		'options' => $options_pages);

	$options[] = array(
		'name' => __('Input Radio (one)', 'options_check'),
		'desc' => __('Radio select with default options "one".', 'options_check'),
		'id' => 'panel_basic_radio',
		'std' => 'one',
		'type' => 'radio',
		'options' => $test_array);

	$options[] = array(
		'name' => __('Example Info', 'options_check'),
		'desc' => __('This is just some example information you can put in the panel.', 'options_check'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Input Checkbox', 'options_check'),
		'desc' => __('Example checkbox, defaults to true.', 'options_check'),
		'id' => 'panel_basic_checkbox',
		'std' => '1',
		'type' => 'checkbox');
?>