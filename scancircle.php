<?php
	/**
	 * Plugin Name: ScanCircle
	 * Plugin URI: http://wordpress.org/plugins/scancircle
	 * Description: Shortcode for the scan button on ScanCircle partner websites. Only for registered ScanCircle partners.
	 * Version: 1.20
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
			'validation' => '',
			'https' => '',
			'jquery' => '',
			'env' => ''	// test/development folder preceeded by a slash
		), $atts ) );

		$options = '';
		if($scanmode)	$options .= '&amp;scanmode='.$scanmode;
		if($info)		$options .= '&amp;info';
		if($prompt) 	$options .= '&amp;prompt='.rawurlencode($prompt);
		if($require) 	$options .= '&amp;require='.rawurlencode($require);		// deprecated
		if($parameter)	$options .= '&amp;parameter='.$parameter;
		if($reference)	$options .= '&amp;reference='.rawurlencode($reference);
		if($inputs)		$options .= '&amp;inputs='.rawurlencode($inputs);
		if($validation)	$options .= '&amp;validation='.rawurlencode($validation);
		if($jquery)		$options .= '&amp;jquery';
		if($options)	$options = '?'.substr($options,5);

		$secure = ($https ? 's' : '');

		$scancircle = <<< EOL
<div id="scancircle">
	<a href="http://$partner.scancircle.com$env/$language" id="scancircle_button" title="ScanCircle Scan">ScanCircle</a>
</div>
<script type="text/javascript" src="http$secure://$partner.scancircle.com$env/$language/scancircle.js$options"></script>
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