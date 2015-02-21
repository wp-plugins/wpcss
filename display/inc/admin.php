<?php
/******************************
	-Css For Admin Dashboard
******************************/
function nhncss_admin() {
	
	global $nhncss_options;
	
	$favicon = $nhncss_options["admin_css"];
	
	$shortcodes = "%BLOG_URL%";
	$longcodes = get_bloginfo("wpurl");
	
	$css_link = str_replace($shortcodes,$longcodes,$favicon);
	
	ob_start(); ?>
	<!-- WpCss Start -->
		<!-- WpCss Version 1.0 : Admin : Visit SuperbCodes.com -->
		<?php if(!empty($nhncss_options["admin_css"])): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $css_link;  ?>" />
		<?php endif; ?>
		<?php if(!empty($nhncss_options["admin"])): ?>
		<style type="text/css">
			<?php echo $nhncss_options["admin"];  ?>
		</style>
		<?php endif; ?>
	<!-- WpCss End -->
	<?php
		echo ob_get_clean();
	}
	add_action('admin_head', 'nhncss_admin');

?>