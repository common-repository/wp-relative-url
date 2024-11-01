=== Relative URLs ===
Contributors: gpepe
Tags: relative link, relative url, staging, https, seo
Requires at least: 5.2.3
Tested up to: 5.9
Requires PHP: 7.2
Stable tag: 1.0.0
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin convert absolute URLs in relative URLs. 

== Description ==

_By default, WordPress saves the content with local domain. If you want develop your blog in one domain and go live in another, you need  replace all URLs in the database._

Relative URLs replace all absolute URLs with relative URLs quickly. You can move from localhost to live domain with minimal effort, but this plugin never change links in database, so you can develop in stanging area or in a subdomain o in a sub-directory without worrying to replace URLs in the content.

**Notice: This plugin SHOULD be used for local development only.**
**Notice: This plugin may conflict with server based cache services (like nginx or Varnish).**


= Benefits =
* Go live in one domain, develop in another
* Move from one directory to another with minimal effort
* Never change links in database
* Switch between HTTP and HTTPS sites
* Backup a production site from one domain, restore for testing at another domain



== Frequently Asked Questions ==

= Why do I need this? =
With Relative URLs you don't need to adjust links after change domain. When you change domains and you move your WordPress blog from subdomain to parent domain, you need to change base URL in configuration and you need to replace all URLs in database.
If you activate Relative URLs all URLs are fine after transfer site: you don't need to change base URL and you don't need to replace all URLs in database.


= I need to change something after change domain? =
No. The plugin replace URLs before WordPress send output, so you don't need any configuration after activate.


= How it works? =
Relative URLs replace the absolute URL with relative URL before WordPress send output. That's it.


= Can I request new feature? =
Of course! I love to get your ideas! Please, [submit your idea](https://wordpress.org/support/plugin/wp-relative-url/) here.


== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/wp-relative-url` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress


== Features ==
* Removes the domain name on links for internal links
* Removes the domain name from on image sources for images located in the server
* Dont't replace URLs in database 


== Changelog ==
= 1.0.0 =
* First release of Relative URLs
