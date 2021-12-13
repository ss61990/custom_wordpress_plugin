<?php
/*
Plugin Name: Form Data
Plugin URI: https://test.com/
Description: It's a Demo plugin for the test
Version: 1.0
Author: Sourav Mudgil
Author URI: https://test.com/wordpress-plugins/
*/

register_activation_hook(__FILE__,'form_data_activate');
register_deactivation_hook(__FILE__,'form_data_deactivate');

function form_data_activate(){
	global $wpdb;
	$table=$wpdb->prefix .'form_data';
	$sql=$wpdb->query("CREATE TABLE IF NOT EXISTS `$table` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,`mname` varchar(255) NOT NULL,`lname` varchar(255) NOT NULL,`address` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,`city` varchar(255) NOT NULL,`state` varchar(255) NOT NULL,`zip_code` int(6) NOT NULL,
  `dob` varchar(255) NOT NULL,`phone` int(10) NOT NULL,`email` varchar(255) NOT NULL,`mode` varchar(255) NOT NULL,
  `created_date` TIMESTAMP NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
  
	  
}
function form_data_deactivate(){
	global $wpdb;
	$table=$wpdb->prefix.'form_data';
	$sql="DROP TABLE $table";
	  $wpdb->query($sql);	
}

add_action('admin_menu','form_data_menu');

function form_data_menu(){
	add_menu_page('Form Data','Form Data',8,__FILE__,'form_data_list');
}

add_shortcode('form_data_list_shortcode','form_data_list');
function form_data_list(){
	include ('form_data_list.php');
}

add_shortcode('form_data_list_record_shortcode','form_data_record');
function form_data_record(){
	include ('form_data_record.php');
}
?>