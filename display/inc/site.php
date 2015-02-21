<?php
/******************************
	-Css For site
******************************/
function nhncss_site() {
	
	global $nhncss_options;

	$shortcodes = "%BLOG_URL%";
	$longcodes = get_bloginfo("wpurl");
	
	$nhncss_options["site_css"] = str_replace($shortcodes,$longcodes,$nhncss_options["site_favicon"]);
	
	
	ob_start(); ?>
	<!-- WpCss Start -->
		<!-- WpCss Version 1.0 : Site : Visit Superbcodes.com-->
		<?php if(!empty($nhncss_options["site_css"])): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $nhncss_options["site_css"];  ?>" />
		<?php endif; ?>
		<?php if(!empty($nhncss_options["site"])): ?>
		<style type="text/css">
			<?php echo $nhncss_options["site"];  ?>
		</style>
		<?php endif; ?>
	<!-- WpCss End -->
	<?php
		echo ob_get_clean();
	}
	if(!empty($nhncss_options["site_favicon"])){
		add_action('wp_head', 'nhncss_site');
}
?>