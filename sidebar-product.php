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
		if($_SESSION['cateSlugProduct']) {
			set_query_var( 'cateSlugProduct', $_SESSION['cateSlugProduct'] );
			echo "<script>window.location.hash='".$_SESSION['cateSlugProduct']."';</script>";
		}

	    set_query_var( 'title', 'Product' ); // -> truyền dữ liệu vào biến my_var -> truyền vào template
	    get_template_part( 'public/template/content', 'nav' ); // -> content-nav.php
        get_template_part( 'public/template/banner', 'area' ); // -> banner-area.php
        get_template_part( 'public/template/product', '' ); // -> product.php
	    get_template_part( 'public/template/footer', '' ); // -> footer.php
	?>
	 
</div>