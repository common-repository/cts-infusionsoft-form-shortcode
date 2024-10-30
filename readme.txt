=== CTS InfusionSoft Form Shortcode ===
Contributors: cts-randell
Donate link: 
Tags: InfusionSoft, Shortcode, JavaScript
Requires at least: 3.3
Tested up to: 3.8
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin adds a shortcode to easily insert into posts and pages the javascript code required to embed an InfusionSoft web form.

== Description ==

One of the issues with stock WordPress is that it tends to not like having Javascript in general and linking to an external Javascript file in specific inside of posts or pages.  This is problematic for people who are integrating InfusionSoft and WordPress.  We tried to find a good solution for this, but failed to find any good plugins which would be suited for the task.

So, we wrote our own.

It is a standard WordPress Plugin.  All you need to do is unzip the file to your plugins directory, or use the zip file upload feature.  Once you've installed it, simply activate.  There are no special settings or anything else you need to do.

To embed an InfusionSoft web form into a post or page, use the following short code:

`[infusionsoft_form src="<Your form's url>"]`

== Installation ==

1. Upload `cts-infusionsoft-form-shortcode.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `[infusionsoft-form src='link to your form']` in a post or page, or use the do_shortcode function to include it in a template.

== Frequently asked questions ==

= Does this work with the html version of webforms or with landing pages? =

No.  This will only work with the javascript version of the web forms.

= Why do I get a `Your source appears to be invalid.` message? =

In order to prevent the plugin from being misused and adding scripts from anywhere, the plugin attempts to verify your src as having a valid infusionsoft.com url.  If it doesn't, then it will not load the script.  Make sure you've copied the url correctly.

== Screenshots ==

1. Using the shortcode in a page

== Changelog ==

V1.1 - Added security to only allow infusionsoft urls in the src.

V1.0 - Initial Release

== Upgrade notice ==

