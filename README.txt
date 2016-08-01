=== Plugin Name ===
Contributors: Jdoyle112
Donate link: jackdoyle.co
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Use this plugin to create custom post types which can be compared against each other by the end users.

== Description ==

Use this plugin to create custom post types which can be compared against each other by the end users. 

When the plugin is activated, a 'Comparables' custom post type will appear on the admin sidebar. Here, you can create your posts which will appear on the front-end (www.yourdomain.com/compare). Your posts can be grouped by category for easier clarification. For example, say you were an auto dealership. You could choose to group your posts into categories based on the type of vehicle (sedan, truck, coupe, etc.). 

All your posts will have individual pages, as well as an archive for all the posts. From the archive page, users can choose individual posts to click on. On the individual post pages, a sidebar will appear with an option to add the current post to a list of posts to be compared. When the user is done selecting posts to be compared, they can press the 'Compare' button which will bring them back to the archive page with the results filtered. 

To return all the results on the archive page, simply press the 'Reset' button. 

The information displayed for the posts on the archive page is determined by the featured image, and custom fields set within the individual posts on the back-end. For example, say you had a post which you wanted to display the price for. You would navigate to that post from the WordPress admin, and scroll to the Custom Fields section at the bottom. You would either press 'Enter new' or select the name from the drop down, and then give provide a value. That name and value will be displayed on the individual post page, as well as on the archive page. 

== Installation ==


1. Upload `wp-compare.php` to the `/wp-content/plugins/` directory 
2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`