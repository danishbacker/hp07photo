<div class="navigate columns isotope-filter">
<?php
		echo '<ul id="options">';
	echo '<li><a data-filter="*" href="#" class="selected">Overview New</a></li>';
	$args = array( 
	'taxonomy'   => 'gallery-category',
	'number'	=> 16,
	'hide_empty' => 0,
	'orderby' => 'name',
	'order'   => 'DESC'
	);
	$cat_lists = get_categories( $args );

	foreach ( $cat_lists as $cat_list ) {
		$category_name = $cat_list->name;
		$category_slug = $cat_list->slug;
			echo '<li><a data-filter=".'. sanitize_text_field( $category_slug ) .'" href="' . get_site_url() . '/' . sanitize_text_field( $category_slug ) .'">' . sanitize_text_field( $category_name ) . '</a></li>';
			
		
	}  

	echo '</ul>';
	?>

</div>