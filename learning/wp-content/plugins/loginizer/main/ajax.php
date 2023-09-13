<?php

if(!defined('ABSPATH')){
	die('Hacking Attempt!');
}


// ------- ACTIONS -------/
add_action('wp_ajax_loginizer_dismiss_csrf', 'loginizer_dismiss_csrf');
add_action('wp_ajax_loginizer_dismiss_backuply', 'loginizer_dismiss_backuply');
add_action('wp_ajax_loginizer_dismiss_newsletter', 'loginizer_dismiss_newsletter');
add_action('wp_ajax_loginizer_failed_login_export', 'loginizer_failed_login_export');
add_action('wp_ajax_loginizer_export', 'loginizer_export');
add_action('wp_ajax_loginizer_generate_sso', 'loginizer_generate_sso');
add_action('wp_ajax_loginizer_delete_sso', 'loginizer_delete_sso');


// ----- FUNCTIONS ------//

function loginizer_dismiss_csrf(){

	// Some AJAX security
	check_ajax_referer('loginizer_admin_ajax', 'nonce');
	 
	if(!current_user_can('manage_options')){
		wp_die('Sorry, but you do not have permissions to change settings.');
	}
	
	update_option('loginizer_csrf_promo_time', (0 - time()));
	echo 1;
	wp_die();
}

function loginizer_dismiss_backuply(){

	// Some AJAX security
	check_ajax_referer('loginizer_admin_ajax', 'nonce');
	 
	if(!current_user_can('manage_options')){
		wp_die('Sorry, but you do not have permissions to change settings.');
	}
	
	update_option('loginizer_backuply_promo_time', (0 - time()));
	echo 1;
	wp_die();
}

function loginizer_dismiss_newsletter(){

	// Some AJAX security
	check_ajax_referer('loginizer_admin_ajax', 'nonce');
	 
	if(!current_user_can('manage_options')){
		wp_die('Sorry, but you do not have permissions to change settings.');
	}
	
	update_option('loginizer_dismiss_newsletter', time());
	echo 1;
	wp_die();
}

//Export Failed Login Attempts
function loginizer_failed_login_export(){
	
	global $wpdb;
	// Some AJAX security
	check_ajax_referer('loginizer_admin_ajax', 'nonce');
	 
	if(!current_user_can('manage_options')){
		wp_die('Sorry, but you do not have permissions to change settings.');
	}
	
	$csv_array = lz_selectquery("SELECT * FROM `".$wpdb->prefix."loginizer_logs` ORDER BY `time` DESC", 1);
	$filename = 'loginizer-failed-login-attempts';
	
	if(empty($csv_array)){
		echo -1;
		echo __('No data to export', 'loginizer');
		wp_die();
	}
		
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename='.$filename.'.csv');
	
	$allowed_fields = array('ip' => 'IP', 'attempted_username' => 'Attempted Username', 'last_f_attemp' => 'Last Failed Attempt', 'f_attempts_count' => 'Failed Attempts Count', 'lockouts_count' => 'Lockouts Count', 'url_attacked' => 'URL Attacked');

	$file = fopen("php://output","w");
	
	fputcsv($file, array_values($allowed_fields));
	
	foreach($csv_array as $failed_attempts){
		
		$row = array($failed_attempts['ip'], $failed_attempts['username'], date('d/M/Y H:i:s P', $failed_attempts['time']), $failed_attempts['count'], $failed_attempts['lockout'], $failed_attempts['url']);
		fputcsv($file, $row);
	}


	fclose($file);
	
	wp_die();

}

// Export CSV
function loginizer_export(){

	// Some AJAX security
	check_ajax_referer('loginizer_admin_ajax', 'nonce');
	 
	if(!current_user_can('manage_options')){
		wp_die('Sorry, but you do not have permissions to change settings.');
	}
	
	$lz_csv_type = lz_optpost('lz_csv_type');
	
	switch($lz_csv_type){
		
		case 'blacklist':
		$csv_array = get_option('loginizer_blacklist');
		$filename = 'loginizer-blacklist';
		break;
		
		case 'whitelist':
		$csv_array = get_option('loginizer_whitelist');
		$filename = 'loginizer-whitelist';
		break;
	}
	
	if(empty($csv_array)){
		echo -1;
		echo __('No data to export', 'loginizer');
		wp_die();
	}
		
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename='.$filename.'.csv');
	
	$allowed_fields = array('start' => 'Start IP', 'end' => 'End IP', 'time' => 'Time');

	$file = fopen("php://output","w");
	
	fputcsv($file, array_values($allowed_fields));

	foreach($csv_array as $ik => $iv){
		
		$iv['start'] = $iv['start'];
		$iv['end'] = $iv['end'];
		$iv['time'] = date('d/m/Y', $iv['time']);
		
		$row = array();
		foreach($allowed_fields as $ak => $av){
			$row[$ak] = $iv[$ak];
		}
		
		fputcsv($file, $row);
	}

	fclose($file);
	
	wp_die();
}

function loginizer_generate_sso(){
	
	if(!wp_verify_nonce($_POST['security'], 'loginizer_nonce')){
		wp_send_json_error(__('Security Check Failed!', 'loginizer'));
	}
	
}

function loginizer_delete_sso(){
	
	if(!wp_verify_nonce($_POST['security'], 'loginizer_nonce')){
		wp_send_json_error(__('Security Check Failed!', 'loginizer'));
	}
	
	if(empty($_POST['sso_ids'])){
		wp_send_json_error(__('Please select a SSO to delete.', 'loginizer'));
	}
	
	$sso_ids = map_deep($_POST['sso_ids'], 'sanitize_text_field');
	
	if(empty($_POST['sso_ids'])){
		wp_send_json_error(__('SSO IDs were malformed', 'loginizer'));
	}
	
	$sso_links = get_option('loginizer_sso_links', []);
	$update_sso_links = false;

	foreach($sso_ids as $sso_id){
		delete_user_meta($sso_id, 'loginizer_sso_' . $sso_id);
		delete_user_meta($sso_id, 'loginizer_sso_' . $sso_id . '_expires');
		
		if(!empty($sso_links)){
			unset($sso_links[$sso_id]);
			$update_sso_links = true;
		}
	}
	
	if(!empty($update_sso_links)){
		update_option('loginizer_sso_links', $sso_links);
	}
	
	wp_send_json_success(__('SSO Links deleted successfully!', 'loginizer'));
}