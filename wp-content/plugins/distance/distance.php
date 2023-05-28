<?php
/**
* Plugin Name: Distance
* Plugin URI: https://www.your-site.com/
* Description: Test.
* Version: 0.1
* Author: your-name
* Author URI: https://www.your-site.com/
**/

define( 'DISTANCE__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
require(DISTANCE__PLUGIN_DIR.'Controllers/DistanceController.php');

if( !function_exists("distance_info") ) {    
    function distance_info()   {     
        $distance_info = new DistanceController();
        $distance_info->index();      
    }  
}
add_shortcode('greeting', 'distance_info');
add_action( 'admin_menu', 'extra_post_info_menu' );  
function extra_post_info_menu(){    
    $page_title = 'Distance Calculation Plug-in';   
    $menu_title = 'Distance Calculate';   
    $capability = 'manage_options';   
    $menu_slug  = 'calculate-distance';   
    $function   = 'distance_calculate_info_page';   
    $icon_url   = 'dashicons-media-code';   
    $position   = 4;    
    add_menu_page( $page_title,$menu_title, $capability,$menu_slug,$function,$icon_url,$position ); }

if( !function_exists("distance_calculate_info_page") ) { 
    function distance_calculate_info_page(){ 
        // echo ISTANCE__PLUGIN_DIR;
        
       $dis = new DistanceController();
        $dis->index();
 } } 

    	
 
 ?>