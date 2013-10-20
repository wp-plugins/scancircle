<?php
	/*
	Plugin Name: ScanCircle scanbutton
	Description: Shortcode for ScanCircle scanbutton
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
			'env' => ''	// test/development folder preceeded by a slash
		), $atts ) );

		$options = '';
		if($scanmode)	$options .= '&amp;scanmode='.$scanmode;
		if($info)	$options .= '&amp;info';
		if($prompt) 	$options .= '&amp;prompt='.rawurlencode($prompt);
		if($require) 	$options .= '&amp;require='.rawurlencode($require);
		if($parameter)	$options .= '&amp;parameter='.$parameter;
		if($reference)	$options .= '&amp;reference='.rawurlencode($reference);
		if($options) $options = '?'.substr($options,5);

		$scancircle = <<< EOL
<div id="scancircle">
<a href="http://$partner.scancircle.com$env/$language" id="scancircle_button" title="ScanCircle Scan">ScanCircle</a><script type="text/javascript" src="http://$partner.scancircle.com$env/$language/scancircle.js$options"></script>
</div>
EOL;

	return $scancircle;
	}
?>