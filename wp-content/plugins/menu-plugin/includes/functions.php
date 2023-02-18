<?php
if ( ! defined( 'ABSPATH' ) ) {
    return;
}
//GET ALL SCRIPT PAGE IN ADMIN SIDE FUNCTION
function menu_call_script_page()
{


	$page_array = array('menu');

	return  $page_array;
}
//INSTALL TABLE PLUGIN ACTIVATE TIME
function menu_install_tables()
{
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	global $wpdb;
		
}





?>