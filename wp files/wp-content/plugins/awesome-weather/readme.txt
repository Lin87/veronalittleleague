=== Plugin Name ===
Contributors: halgatewood
Donate link: http://halgatewood.com/donate/
Tags: widgets, sidebar, shortcode, openweathermap, weather, weather widget, forecast, global, temp
Requires at least: 3.5
Tested up to: 4.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Finally beautiful weather widgets for your site.

== Description ==

[Pro Version](http://halgatewood.com/downloads/awesome-weather-widget-pro/) available. Icons, 3 New Layouts, Weather by Yahoo!, User Detection and more!

This plugin allows you to easily add super clean (and awesome) weather widgets to your site. The weather data is provided for free by http://openweathermap.org

Use the built in widget with all of its marvelous settings or add it to a page or theme with the shortcode: (all settings shown)

`[awesome-weather location="Montreal" units="F" size="tall" override_title="MTL" forecast_days="2" hide_stats=1 background="http://urltoanimage.jpg" custom_bg_color="#cccccc" inline_style="width: 200px; margin: 20px; float: left;"]`

= Settings =

*   Location: Enter like Montreal, CA or just Montreal. You may need to try different variations to get the right city
*   Units: F (default) or C
*   Size: wide (default) or tall
*   Override Title: Change the title in the header bar to whatever, sometimes it pulls weather from a close city
*   Forecast Days: How many days to show in the forecast bar
*   Hide stats: Hide the text stats like humidity, wind, high and lows, etc
*   Background: URL to an image that will be used as the background of the entire widget
*   Custom Background Color: Add a hex color to override the default colors
*   Inline Styles: Add inline CSS styles to your widget to float around text and whatever else

= Translations =
* Portuguese - alvarogois
* German - Anne Bremer
* Polish - Femcio
* Dutch - Marco Rooze
* Swedish - AJ
* French - Gilles D.
* Italian - Cesare C.
* Russian - Alex
* Spanish - Joaquín B
* Greek - John T

== Installation ==

1. Add plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use shortcode or widget to display awesome weather on your awesome site


== Screenshots ==

1. Basic wide layout
2. Basic tall layout
3. Micro, using the checkbox 'Hide Stats'
4. Widget Settings
5. Background Image Option (1.2)
5. Add inline styles to your widget and set custom background colors (1.3.1)

== Upgrade Notice ==

= 1.4.1 =
* New translations added.
* Caching fixes
* Fixed checkboxes in widget settings
* Checked to be working with WordPress 3.9

= 1.4 =

Gearing up for the PRO version coming soon which will include: 
* weather icons
* custom layouts
* shortcode generator
* C/F switching
* User location detection

This release includes:
* Extended forecast now uses WP current_time to determine what days to show, uses Timezone in 'Settings' -> 'General'
* Added a Widget Title field that uses the standard widget code from the sidebar (optional)
* Support for OpenWeatherMaps City ID, just insert in the Location field.
* Support for rgba() in the Custom Background Color


= 1.3.4 =
Fixed issue with Location stripping spaces from text cause weather to not get accessed. Thanks @storkontheroof!

= 1.3.3 =
Moved Google Font out of CSS into enqueue

= 1.3.2 =
Improved support for poorly coded themes that load the before_title and after_title with extra divs and don't take into account that widgets may not use a title. 

= 1.3.1 = 
Added setting for color override
Added URL param to clear transient cache '?clear_awesome_widget'
Added new translations for the days of the week in the extended forecast
Ability to add inline styles to the widget shortcode

= 1.3 =
Upgraded to most recent OpenWeatherMap APIS and included translation files.

= 1.2.6 =
Improved error handling with API calls

= 1.2.5 =
Widget with custom background CSS issue.

= 1.2.4 =
Forecast now stops showing today.

= 1.2.3 =
Better API Support

= 1.2 =
Background Image Option

= 1.1.1 =
Google Font URL changed or I messed it up, probably me.

= 1.1 =
Errors are now commented out. Look in the source to see what the problem is.

= 1.0.2 =
Removed debugging code, sorry!

= 1.0.1 =
Changed API endpoints. Might not find weather without update.

== Changelog ==

= 1.4.1 =
* New translations added.
* Caching fixes
* Fixed checkboxes in widget settings
* Checked to be working with WordPress 3.9

= 1.4 =
* Extended forecast now uses WP current_time to determine what days to show, setting in 'Settings' -> 'General'
* Added a Widget Title field that uses the standard widget code from the sidebar (optional)
* Fixed bottom margin issue for Firefox
* Minor CSS tweaks
* Support for OpenWeatherMaps City ID, just insert in the Location field.
* Support for rgba() in the Custom Background Color
* Changed default cached time from 1 hour to 3 hours
* Cleaned up two PHP notices in admin


= 1.3.4 =
Fixed issue with Location stripping spaces from text cause weather to not get accessed. Thanks @storkontheroof!

= 1.3.3 =
Moved Google Font out of CSS into enqueue

= 1.3.2 =
* Improved support for poorly coded themes that load the before_title and after_title with extra divs and don't take into account that widgets may not use a title. 
* Portuguese translation created by user: alvarogois

= 1.3.1 = 
* Added setting for color override
* Added URL param to clear transient cache '?clear_awesome_widget'
* Added new translations for the days of the week in the extended forecast
* Improved caching support
* Ability to add inline styles to the widget shortcode

= 1.3 =
* Upgraded to most recent OpenWeatherMap APIS
* Ready for translations
* Current Locales available from OpenWeatherMap: 
* English - en, Russian - ru, Italian - it, Spanish - sp, Ukrainian - ua, German - de, Portuguese - pt, Romanian - ro, Polish - pl, Finnish - fi, Dutch - nl, French - fr, Bulgarian - bg, Swedish - se, Chinese Traditional - zh_tw, Chinese Simplified - zh_cn, Turkish - tr 

= 1.2.6 =
* Improved error handling with API calls

= 1.2.5 =
* Widget with custom background CSS issue.

= 1.2.4 =
* Forecast now stops showing today.

= 1.2.3 =
* remove file_get_contents and used wp_remote_get

= 1.2.1 =
* Background Image Option in widget

= 1.2 =
* Background Image Option

= 1.1 =
* Errors are now commented out. Look in the source to see what the problem is.
* Ability to add link to openweathermap for extended forecast

= 1.0.2 =
* Removed debugging code, sorry!

= 1.0.1 =
* Changed API endpoints

= 1.0 =
* Initial load of the plugin.