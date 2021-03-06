=== Plugin Name ===
Contributors: jondor
Donate link: http://plugins.funsite.eu/gps-map-widget/
Tags: featured image,gps,google maps,static map,widget
Requires at least: 3.0.1
Tested up to: 4.7
Stable tag: 1.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin implements a widget and a shortcode for a static google map which shows the GPS coordinates if those are available in the featured image.

== Description ==

This plugin implements a widget with a static google map which shows the GPS coordinates if those are available in the featured image.

Besides the widget it also adds two shortcodes:

= EXIF_locationmap: =

*	width: width of the mapimage in px. default 300px
*	height: height of the mapimage in px. default 200px;
*	zoom: googlemaps zoomlevel. Default 11
*	Errors: Show error messages when no exif is available or when there's no featured image. Default is false for the shortcode

Example:
	[EXIF_locationmap width=750 height=300 zoom=11 errors=false apikey=###]

= EXIF_location: =

* part:  'latitude', 'longitude' or 'both'
* form:  'dec' or 'dms' (decimal or Degree minute seconds. Decimal is default);


example:
	[EXIF_location part=both]
	will return  52.22935055,6.8737411

	[EXIF_location part=both form=dms]
	will return  52°21'13"N , 6°26'7"N

If you would like to add this geoinformation also to your rss feed, there's my addGEORSS plugin which does exactly this. It uses the same data as stored by this plugin.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the widget to a widgetarea. You can set the widget title, width and height in pixels, and the zoomlevel.

== Frequently Asked Questions ==

= Why did you write this widget? =
As an first attempt to write a widget and because I couldn't find one that did what thisone does (and nothing more!)

= Why the shortcodes =
Guess you can use them for generating your own image from bing maps or alike. Putting a big map in the content has it's charm too..

= I would like to edit the coordinates =
Well, you probably can in your image processing software. Digikam can do it, so can darktable. But starting with the map on the editscreen I'm
slowely working towards this feature.

= Where to get an API Key =
For now, this is a bit of a nerd stuff.. Go to https://console.developers.google.com, log in and create a project, search for the "static maps api"
under libraries and enable it.
Go to the "Credentials" screen and use the button "Create credentials". Select API key. And save it. Google suggests to restrict the usage of the key by IP
or HTTP. If you want to use IP (test-environment of virtual server and the like) don't forget to add ipV4 AND ipV6 if you use both.
Also, it takes a few minutes for the system to recognise the changes. Until that time you will get an 403 error with a message about an outdated api.
Just be patient..

== Screenshots ==

1. Widget as presented to the user (using Alizee theme in this case)
2. The widget settings

== Changelog ==
=1.9=
Fixed some user reported issues
centered the messages in the widgetarea

=1.8=
Added an google apikey field in the widgetsettings. This key is only needed when you want to show a map AND have substansional usage of your site.

= 1.7 =
Some changes to the basic_plugin_class which, regretfully, isn't allowed to have it's own plugin anymore.
move the javascript to the basic plugin class

= 1.6 =
Fixes for WP4.3

= 1.5 =
Cleaned up the code and fixed some minor bugs.

= 1.4 =
Added translation support and added an extra dutch translation. If you translate the pluing the resulting .po file would be appriciated.
I used the "CodeStyling Localization" for my translation and it worked like a dream.

= 1.3 =
Added the map to the media edit page.

= 1.2.4 =
Added form attribute

= 1.2.3 =
Fixed readme

= 1.2.2 =
Minor details

= 1.2.1 =
* learned the order in which plugins are loaded is important. So I've added checkes for the existance of functions

= 1.2 =
Nothing really just trying to clean up some stupid svn mixups..

= 1.1 =
* found coordinates are stored in the database. For now this is done whenever the plugin is shown and only for the post on screen.
  For those interested I use the meta_key "EXIF_location" containing an array with latitude,longitude and hasLocation. hasLocation is
  a boolean which is true when the lat/long fields are filled, but empty. (No EXIF info available in the image!)

* Added the shortcode EXIF_location and EXIF_locationmap

= 1.0 =
* First release

== Upgrade Notice ==
