<?php get_header();

/*
Template Name: About Template
*/

wp_enqueue_script( 'bow-isotope', BOW_DIR. '/js/isotope.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'bow-work-mansory', BOW_DIR. '/js/work-mansory.js', array( 'jquery', 'bow-isotope' ), '', true );
?>
<!-- section -->
<section class="work-mansonry" id="work">
	<div class="offset">
		<div class="navigate columns isotope-filter">
		<?php
			  echo '<ul id="options">';
	        echo '<li><a data-filter="*" href="#" class="selected">Overview</a></li>';
	        $args = array( 
			'taxonomy'   => 'gallery-category',
			'number'	=> 14,
			'hide_empty' => 0,
			'orderby' => 'name',
			'order'   => 'DESC'
			);
	        $cat_lists = get_categories( $args );

	        foreach ( $cat_lists as $cat_list ) {
	           	$category_name = $cat_list->name;
		        $category_slug = $cat_list->slug;
		            echo '<li><a data-filter=".'. sanitize_text_field( $category_slug ) .'" href="#">' . sanitize_text_field( $category_name ) . '</a></li>';
	            
	        }  

	        echo '</ul>';
	        ?>

		</div>
		
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		
		$args = array(
			'post_type'          => 'ta-gallery',
			'post_status'        => 'publish',
			'posts_per_page'     => -1,
			'paged'				 => $paged
		);
		$query_work = new WP_Query( $args );
		?>
		<div class="navi">
			<?php
				next_posts_link( 'Older Entries', $query_work->max_num_pages );
			?>			
		</div>
		
		<div id="foliowrap" class="about-me"> <!-- Isotope -->	

			<h1><?php the_title(); ?></h1>

			<?php while ( have_posts() ) : the_post(); ?>


				<div class="img-hold">
					<img src="<?php the_field('about_image'); ?>"/>
				</div>
				<?php the_content();  // Page Content ?>
				<?php //get_template_part( 'inc/format/content', 'page-about' ); ?>
						
			<?php endwhile; // end of the loop. ?>

			<?php //wp_reset_postdata(); endif; ?>
		</div>
		<!-- Isotope -->	
	</div>
</section>
<!-- section -->
<!-- footer -->
<footer class="footer">
	<div><?php bow_work_slogan(); ?></div>
</footer>
<!-- header -->
<?php get_footer(); ?>