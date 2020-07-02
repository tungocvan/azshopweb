<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package azshopweb
 */

$uri = $_SERVER['REQUEST_URI'];
$array = explode('/', $uri);
echo '<pre>';print_r($array);echo '</pre>';
if(isset($_SESSION['nav_menu'])){
	echo "Menu:";
	echo '<pre>';print_r($_SESSION['nav_menu']);echo '</pre>';
}
if($array[2] == "product") {
	if($array[3] !="") {	
		if($array[4] !="") {
			echo "-  slug: ".$array[4];
			$slug = $array[4];
		}else{
			echo "product slug: ".$array[3];
			$cateSLug = $array[3];
		}
	}
}else if($array[2] == "post") {
	if($array[3] !="") {		
		if($array[4] !="") {
			echo "- slug: ".$array[4];
			$slug = $array[4];
		}else{
			echo "post slug: ".$array[3];
			$cateSLug = $array[3];
		}
	}
}else {
	echo "path not found";
}
?>