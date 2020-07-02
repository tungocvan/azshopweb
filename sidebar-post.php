<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tungocvan
 */
?>
<div class="wrapper fixed__footer">
	<?php 
		if($_SESSION['cateSlugPost']) {
			//set_query_var( 'cateSlugPost', $_SESSION['cateSlugPost'] );
			set_query_var( 'cateSlugPost', $_SESSION['uri'] );
			echo "<script>window.location.href = ".$_SESSION['uri']." ;</script>"; 
		}
	    set_query_var( 'title', 'Post' ); // -> truyền dữ liệu vào biến my_var -> truyền vào template
	    get_template_part( 'public/template/content', 'nav' ); // -> content-nav.php
        get_template_part( 'public/template/banner', 'area' ); // -> banner-area.php
        get_template_part( 'public/template/post', '' ); // -> product.php
	    get_template_part( 'public/template/footer', '' ); // -> footer.php
	?>
	 
</div>