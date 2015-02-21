<?php
/******************************
	-Css For Login Screen
******************************/
	function nhncss_login_screen() {
	
	global $nhncss_options;

	$shortcodes = "%BLOG_URL%";
	$longcodes = get_bloginfo("wpurl");
	
	$nhncss_options["login_screen_css"] = str_replace($shortcodes,$longcodes,$nhncss_options["login_screen_favicon"]);
	
	ob_start(); ?>
	<!-- WpCss Start -->
		<!-- WpCss Version 1.0 : Login Screen : Visit Superbcodes.com-->
		<?php if(!empty($nhncss_options["login_screen_css"])): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $nhncss_options["login_screen_css"];  ?>" />
		<?php endif; ?>
		<?php if(!empty($nhncss_options["login"])): ?>
		<style type="text/css">
			<?php echo $nhncss_options["login"];  ?>
		</style>
		<?php endif; ?>
	<!-- WpCss End -->
	<?php
		echo ob_get_clean();
	}
	add_action('login_head', 'nhncss_login_screen');
?>