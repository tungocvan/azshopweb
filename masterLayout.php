<?php
session_start();
/**
 * The main template file
 * Template Name: Master-Layout
 */
 
 $uri = $_SERVER['REQUEST_URI'];
 $array = explode('/', $uri);
 //echo '<pre>';print_r($array);echo '</pre>';
 $sidebar = "home";
 $method = "";
 if($array[2]!=null){
     $sidebar = $array[2]; 
 }
 if($array[3]!=null){
     $method = $array[3]; 
 }
 get_header('home');
 //echo do_shortcode('[xyz-ips snippet="header"]');	   

 get_sidebar($sidebar);
 get_template_part( 'public/template/quick', 'view' ); // -> quick-view.php
 //echo do_shortcode('[xyz-ips snippet="footer"]');
 get_footer('home');    
?>
