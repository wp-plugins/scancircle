=== ScanCircle ===
Contributors: aklaren
Tags: scancircle, scan button, shortcode
Requires at least: 2.5
Tested up to: 3.9.1
Stable tag: 1.20
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Shortcode for the scan button on ScanCircle partner websites.

== Description ==
Shortcode for the scan button on ScanCircle partner websites. 

Only for registered ScanCircle partners.

Insert the following shortcode in your posts:

`[scancircle
	partner="{partner-code}"
	language="en|nl"
	scanmode="D|A|M|P" 
	info="1"
	prompt="{label-input-field}"
	parameter="{url-parameter}"
	reference="{fixed-value}"
	inputs="{element-name;...}"
	category="{category}"
	validation="email;phone;{regex};{function}()"
	jquery="1"
]`

Remarks:

* The only required field is `partner`.
* Default language is "en" (English). 
* The fields between {} are variables.
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
= Can I use the shortcuts in a template? =
Yes, but you need the do_shortcut function as in: <?php echo do_shortcode('[scancircle ...]'); ?>
= Can I user the [phpvar] shortcut in Contact Form 7 =
No, to include URL parameters in a contact form (CF7), use the [Contact Form 7 Dynamic Text Extension](http://wordpress.org/plugins/contact-form-7-dynamic-text-extension) plugin

== Screenshots ==
1. None yet

== Changelog ==
= 1.23 =
* `category` option added to indicate the purpose of the scan page and/or reference code, entered data will be prepended to the reference code (separated by a colon)

= 1.20 =
* `inputs` option added to support multiple input fields (names separated by semicolon), entered data will be joined (separated by semicolons)
* `validation` option added to check input field for required data, e-mail address, phone number, any regular expression or using a custom function
* `require` option now deprecated (converted to `prompt` option and `validation="required"` for backward compatibility)
* `jquery` option added to run script when document.ready (mainly for Joomla web sites which requires <script> tag in header)

= 1.19 =
* Added `[phpvar]` shortcode to retrieve the PHP superglobals $_GET, $_POST and $_SERVER
* Required to get the value of URL parameters, post variables, initiating web pages, etc.
* Added because they may be needed for ScanCircle and I could not find an easy way or simple plugin to achieve this

= 1.18 =
* First release

== Upgrade Notice ==
= 1.20 =
* Upgrade if you want to validate the data entered into the input field and/or want to use multiple input fields

= 1.19 =
* Only need to upgrade if you need to access PHP variables

= 1.18 =
* First release
