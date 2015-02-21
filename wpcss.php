<?php
/*
Plugin Name: WpCss
Plugin URI: http://www.SuperbCodes.com/
Description: If your theme dosen't give you freedom to add your own css tags then this plugin is best solution for you.Using this plugin you can add your own css codes to your site's frontend,admin panel and login screen.You can attach a .css file also.Using %BLOG_URL% shortcode you can easyly link your css file. 
Tags: css,custom css,wpcss,.css,stylesheet
Version: 1.0
Author:	Nazmul Hossain Nihal
Author URI: http://www.SuperbCodes.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


/******************************
* global variables
******************************/

$nhncss_options = get_option('cwfav_settings');

/******************************
* includes
******************************/

include('admin/nhncss_options.php'); //Admin Panel

include('display/settings.php'); //Display