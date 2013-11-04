=== ScanCircle ===
Contributors: aklaren
Tags: scancircle, scan button, shortcode
Requires at least: 2.5
Tested up to: 3.6.1
Stable tag: 1.19
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Shortcode for the scan button on ScanCircle partner websites. Only for registered ScanCircle partners.

== Description ==
Shortcode for the scan button on ScanCircle partner websites. 

Only for registered ScanCircle partners.

Insert the following shortcode in your posts:

`[scancircle
	partner="partner-code"
	language="en|nl"
	scanmode="D|A|M|P" 
	info="1"
	prompt="text"
	require="text"
	parameter="url-parameter"
	reference="fixed-value"
]`

Remarks:

* The only required field is `partner`.
* Default language is "en" (English). 
* Login to your ScanCircle partner page and click the wizard wand to see all available options.
* More information about the [ScanCircle partner program](http://www.scancircle.com/en/scancircle/partner-program).

Use the `[phpvar get|post|server="var"]` shortcode to retrieve the PHP superglobals $_GET, $_POST and $_SERVER:

* `[phpvar get="refcode"]`: returns the URL parameter `refcode`
* `[phpvar post="computer"]`: returns the posted field `computer`
* `[phpvar server="HTTP_REFERER"]`: returns the initiating web page

== Installation ==
Manual installation:

1. Upload the folder `scancircle` to the `/wp-content/plugins/` directory
2. Activate the `scancircle` plugin through the 'Plugins' menu in WordPress
3. Place the `[scancircle ...]` and/or `[phpvar ...]` shortcuts in your posts

== Frequently Asked Questions ==
= How can I change the styling of the scan button or the text? =
See http://www.scancircle.com/forum/showthread.php?tid=50 (login required)

== Screenshots ==
1. None yet

== Changelog ==
= 1.19 =
* Added `[phpvar]` shortcode to retrieve the PHP superglobals $_GET, $_POST and $_SERVER
* Required to get the value of URL parameters, post variables, initiating web pages, etc.
* Added because they may be needed for ScanCircle and I could not find an easy way or simple plugin to achieve this
* To include URL parameters in a contact form (CF7), use the [Contact Form 7 Dynamic Text Extension](http://wordpress.org/plugins/contact-form-7-dynamic-text-extension) plugin

= 1.18 =
* First release

== Upgrade Notice ==
= 1.19 =
* Only need to upgrade if you need to access PHP variables

= 1.18 =
* First release
