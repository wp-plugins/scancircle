=== ScanCircle ===
Contributors: aklaren
Tags: scancircle, scan button, shortcode
Requires at least: 2.5
Tested up to: 3.6.1
Stable tag: 1.18
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Shortcode for the scan button on ScanCircle partner websites.
Only for registered ScanCircle partners.

== Description ==
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

* The only required field is partner. 
* Default language is "en" (English). 
* Login to your ScanCircle partner page and click the wizard wand to see all available options.
* More information about the [ScanCircle partner program](http://www.scancircle.com/en/scancircle/partner-program).

== Installation ==
Manual installation:

1. Upload the folder `scancircle` to the `/wp-content/plugins/` directory
2. Activate the `scancircle` plugin through the 'Plugins' menu in WordPress
3. Place the [scancircle ...] shortcut in your posts

== Frequently Asked Questions ==
= How can I change the styling? =
See http://www.scancircle.com/forum/showthread.php?tid=50 (login required)

== Screenshots ==
1. None yet

== Changelog ==
= 1.18 =
* First release

== Upgrade Notice == 
= 1.18 =
* First release
