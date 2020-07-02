<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package azshopweb
 */
$uri = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

	//echo '<pre>';print_r(pathinfo("http://localhost/wp532/abc"));echo '</pre>'; die();
	$array = explode('/', $uri);
	echo '<pre>';print_r($array);echo '</pre>';
	if($array[2] == "product" && isset($array[3])) {
			
			$_SESSION['cateSlugProduct'] = $array[3];
	
		if(isset($array[4])){
			$_SESSION['slugProduct'] = $array[4];
		}
		
		$url = pathinfo($uri)['dirname'];
		echo "<script>window.location.href='".$url."';</script>"; 
	}
echo "path not found";
?>