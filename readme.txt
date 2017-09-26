=== Vulnerability Alerts ===
Contributors: edir
Tags: security, vulnerability, wpscan, hack, scan, exploit, secure
Requires at least: 3.4
Tested up to: 4.8
Stable tag: 1.3.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Scans your system for vulnerabilities listed in the WPScan Vulnerability Database.

== Description ==

This plugin scans your system on a daily basis to find vulnerabilities listed in the WPScan Vulnerability Database. It shows an icon on the Admin Toolbar with the total number of vulnerabilities found.

= What does it do? =

* Scans the WordPress core, your themes and your plugins for vulnerabilities;
* Shows an icon on the Admin Toolbar with the total number of vulnerabilities found;
* Notifies you by mail when new vulnerabilities are found.


== Installation ==

1. Upload `vulnerability-alerts.zip` content to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. List of vulnerabilities and icon at Admin Bar.
2. Notification settings.

== Changelog ==

= 1.3.2 =
* [Fixed] Admin icon shows ignored vulnerabilities.

= 1.3.1 =
* [Added] Language files.

= 1.3 =
* [Added] Option to select the day of the week to receive notifications.
* [Added] Option to disable notifications for a vulnerability that you consider fixed.

= 1.2 =
* [Added] Uninstall script.
* [Bug] List shows "not fixed" vulnerabilities. Thanks to @eusebiuoprinoiu.

= 1.1 =
* [Added] Option to be notified by mail.
* [Updated] Check Now button now prevents reload page to recheck.

= 1.0 =
* First release.
