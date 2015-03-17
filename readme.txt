=== Wppa Admin Language Pack ===
Contributors: opajaap
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=OpaJaap@OpaJaap.nl&item_name=WP-Photo-Album-Plus&item_number=Support-Open-Source&currency_code=USD&lc=US
Tags: wppa, language, translation, wp-photo-album-plus
Version: 5.5.4
Stable tag: trunk
Author: J.N. Breetvelt
Author URI: http://www.opajaap.nl/
Requires at least: 3.9
Tested up to: 4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin adds language files for admin pages of the plugin WP Photo Album plus.

== Description ==

This plugin adds language files for admin pages of the plugin WP Photo Album plus.

== Installation ==

This section describes how to install the plugin and get it working.

= Note =

This plugin requires the plugin Wp Photo Album plus to be installed and activated

Install the plugin from the 'Plugins' menu in WordPress, or do it 'manually':

1. Download `wppa-admin-language-pack.zip` and unpack it on your local pc.
1. Upload folder `wppa-admin-language-pack` to the `/wp-content/plugins/` directory
1. Activate the plugin Wppa Admin Language Pack through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do i add or update my language files =

1. Find out what your languages locale is. E.g. **fr_FR** for french, **nl_NL** for dutch, **da_DK** for danish and so on.
1. Look in the **langs/** subfolder if there is a file **wppa-zz_ZZ.po** with your languages locale in the place of **zz_ZZ**.
1. If such a file does not exist, change the name of the file **wppa-xx_YY.po** so that it confirms to your locale.
1. Use the program poedit ( downloadable at http://poedit.net/download ) to enter your translations.
If you just changed the name of wppa-xx_YY.po to start a new language, poedit will ask you to set the language. Do so.
Do *NOT* press the update button, this will fail because the source files are not present at the expected locations.
The original untranslated strings in the .po files supplied in this plugin are up-to-date to the same version of wppa+.
Note: 'Fuzzy' strings will not be displayed translated.
1. After (partial) completion, send the .po file to opajaap@opajaap.nl, they will be included in the release version of this plugin.
If you configured poedit as such, it will also produce a .mo file when you save the .po file. 
Place the .mo file in your version of this plugin on the server to test it on your websites wppa+ admin pages.

== Changelog ==

= 5.5.4 =
* Updated to wppa+ version 5.5.4

= 5.4.25 =
* Updated to wppa+ version 5.4.25

= 5.4.3 =
* Updated to wppa+ version 5.4.3

= 5.4.1 =
* Updated to wppa+ version 5.4.1

= 5.4.0 =
* Initial release. The version number will be kept equal to the version of wppa+ to what version it is compatible.
