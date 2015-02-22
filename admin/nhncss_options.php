<?php
	/******************************
		-Admin Panel goes here
	******************************/
	function nhncss_options_page() {

		global $nhncss_options;

		ob_start(); ?>
		<div class="wrap">
			<h2>Custom Css</h2>
			
			<?php
				$input = array(
					"site" => array("type"=>"textarea","text"=>"Site Css","class"=>"nhncss_file"),
					"site_css" => array("type"=>"text","text"=>"Site Css Url","class"=>"nhncss_file","placeholder" => "Example: %BLOG_URL%/wpcontent/custom.css"),
					"login" => array("type"=>"textarea","text"=>"Login Css","class"=>"nhncss_file"),
					"login_screen_css" => array("type"=>"text","text"=>"Login Screen Css Url","class"=>"nhncss_file","placeholder" => "Example: %BLOG_URL%/wpcontent/custom.css"),
					"admin" => array("type"=>"textarea","text"=>"Admin Css","class"=>"nhncss_file"),
					"admin_css" => array("type"=>"text","text"=>"Admin Css Url","class"=>"nhncss_file","placeholder" => "Example: %BLOG_URL%/wpcontent/custom.css"),
				);
			?>
			<form method="post" action="options.php">
				<?php settings_fields('nhncss_settings_group'); ?>
				<table>
					<?php foreach ($input as $name => $data) : ?>
						<?php if($data["type"]=="text"): ?>
							<tr>
								<td style="text-align:;"><label class="description" for="nhncss_settings[<?php echo $name; ?>]"><?php _e($data["text"], 'nhncss_domain'); ?> : </label></td>
								<td><input class="<?php echo $data["class"]; ?>" id="nhncss_settings[<?php echo $name; ?>]" size="45" name="nhncss_settings[<?php echo $name; ?>]" type="text" value="<?php echo $nhncss_options[$name]; ?>" placeholder="<?php echo $data["placeholder"]; ?>"/></td>
							</tr>
						<?php elseif($data["type"]=="textarea"): ?>
							<tr>
								<td style="text-align:;"><label class="description" for="nhncss_settings[<?php echo $name; ?>]"><?php _e($data["text"], 'nhncss_domain'); ?> : </label></td>
								<td><textarea style="height:150px;width:365px;" class="<?php echo $data["class"]; ?> nhn-css-my-code-area" id="nhncss_settings[<?php echo $name; ?>]" size="45" name="nhncss_settings[<?php echo $name; ?>]" type="text"><?php echo $nhncss_options[$name]; ?></textarea></td>
							</tr>
						<?php endif; ?>
						
					<?php endforeach; ?>
					<tr>
						<td></td>
							<td>
								<br />
					<iframe src="//www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fnazmul.hossain.nihal&amp;width&amp;height=35&amp;colorscheme=light&amp;layout=standard&amp;show_faces=false&amp;appId=715408735224516" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
					<br />
					If you find this plugin useful then please rate this plugin <a style="text-decoration:none;" href="http://wordpress.org/extend/plugins/wpcss" target="_blank">here</a> <br /> and don't forget to visit my website <a style="text-decoration:none;" href="http://www.SuperbCodes.com/" target="_blank">SuperbCodes.com</a>.
					<p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FYMPLJ69H9EM6" target="_blank"><img style="width:100px;height:30px;" alt="Donate" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/donate.gif" /></a></p>

							</td>
						</tr>
					<tr>
						<td></td>
						<td class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Options', 'nhncss_domain'); ?>" /></td>
					</tr>
				</table>
			</form>
			<script>
			  $('.nhn-css-my-code-area').ace({ theme: 'tomorrow', lang: 'css' })
			</script>
		</div>
		<?php
		echo ob_get_clean();
	}

	function nhncss_add_options_link() {
		add_options_page('Custom Css', 'Custom Css', 'manage_options', 'nhncss-options', 'nhncss_options_page');
	}
	add_action('admin_menu', 'nhncss_add_options_link');

	function nhncss_register_settings() {
		register_setting('nhncss_settings_group', 'nhncss_settings');
	}
	add_action('admin_init', 'nhncss_register_settings');
	
	function nhncss_scripts_method() {
		if(is_admin()){
			wp_enqueue_script('custom_admin_script_1',  plugins_url('/js/jquery.js', __FILE__), array('scriptaculous'));
			wp_enqueue_script('custom_admin_script_2',  plugins_url('/js/ace.js', __FILE__), array('scriptaculous'));
			wp_enqueue_script('custom_admin_script_3',  plugins_url('/js/mode-css.js', __FILE__), array('scriptaculous'));
			wp_enqueue_script('custom_admin_script_4',  plugins_url('/js/jquery-ace.min.js', __FILE__), array('scriptaculous'));
		}
	}    

	add_action('init', 'nhncss_scripts_method');

?>