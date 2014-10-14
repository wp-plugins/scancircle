<?php
	/**
	 * Plugin Name: ScanCircle
	 * Plugin URI: https://wordpress.org/plugins/scancircle
	 * Description: Shortcode for the scan button on ScanCircle partner websites. Only for registered ScanCircle partners.
	 * Version: 1.24
	 * Author: Arnoud Klaren
	 */
	add_shortcode('scancircle', 'scancircle_handler');

	function scancircle_handler( $atts ) {
		extract( shortcode_atts( array(
			'partner' => '',
			'language' => 'en',
			'scanmode' => '',
			'info' => '',
			'prompt' => '',
			'require' => '',
			'parameter' => '',
			'reference' => '',
			'inputs' => '',
			'category' => '',
			'validation' => '',
			'https' => '',
			'jquery' => '',
			'env' => ''	// test/development folder preceeded by a slash
		), $atts ) );

		$options = '?plugin=WordPress1.23';
		if($scanmode)	$options .= '&amp;scanmode='.$scanmode;
		if($info)		$options .= '&amp;info';
		if($prompt) 	$options .= '&amp;prompt='.rawurlencode($prompt);
		if($require) 	$options .= '&amp;require='.rawurlencode($require);		// deprecated
		if($parameter)	$options .= '&amp;parameter='.$parameter;
		if($reference)	$options .= '&amp;reference='.rawurlencode($reference);
		if($inputs)		$options .= '&amp;inputs='.rawurlencode($inputs);
		if($category)	$options .= '&amp;category='.rawurlencode($category);
		if($validation)	$options .= '&amp;validation='.rawurlencode($validation);
		if($jquery)		$options .= '&amp;jquery';

		$secure1 = ($https>=1 ? 's' : '');
		$secure2 = ($https>=2 ? 's' : '');

		$scancircle = <<< EOL
<div id="scancircle">
	<a href="http$secure2://$partner.scancircle.com$env/$language" id="scancircle_button" title="ScanCircle Scan">ScanCircle</a>
</div>
<script type="text/javascript" src="http$secure1://$partner.scancircle.com$env/$language/scancircle.js$options"></script>
EOL;

		return $scancircle;
	}

	add_shortcode('phpvar', 'phpvar_handler');

	function phpvar_handler( $atts ) {
		extract( shortcode_atts( array(
			'get' => '',
			'post' => '',
			'server' => ''
		), $atts ) );

		if($get)	return $_GET[$get];
		if($post)	return $_POST[$post];
		if($server)	return $_SERVER[$server];
		return 'Syntax: [phpvar get|post|server="var"]';
	}
?>