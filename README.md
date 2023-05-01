# Mageafi-UserPost-Plugin-for-Wordpress

Mageafi UserPost Plugin for Wordpress

Installation

HOW TO INSTALL THE PLUGIN

Upload the plugin to your blog and activate

Configure your options via the plugin settings
Display the form via shortcode or template tag
More info on installing WP plugins

HOW TO USE THE PLUGIN
To display the form on any WP Post, Page, or widget, add the shortcode:

[user-submitted-posts]
Or, to display the form anywhere in your theme, add the template tag:

<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
CUSTOMIZING THE FORM
There are three main ways of customizing the form:

Plugin settings, you can show/hide fields, configure options, etc.
Custom form template (see “Custom Submission Form” for more info)
By using USP action/filter hooks (advanced)
