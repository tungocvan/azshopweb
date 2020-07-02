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
		if($_SESSION['slugPost']) {
			set_query_var( 'slugPost', $_SESSION['slugPost'] );
			echo "<script>window.location.replace='".$_SESSION['uri']."';</script>"; 
		}
	    set_query_var( 'title', 'Post Detail' ); // -> truyền dữ liệu vào biến my_var -> truyền vào template
	    get_template_part( 'public/template/content', 'nav' ); // -> content-nav.php
        get_template_part( 'public/template/banner', 'area' ); // -> banner-area.php
        get_template_part( 'public/template/post', 'detail' ); // -> product.php
	    get_template_part( 'public/template/footer', '' ); // -> footer.php
	?>
	 
</div>