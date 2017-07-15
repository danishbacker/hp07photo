<?php get_header();  ?>

<section class="work-mansonry" id="work">
<div class="offset">
    <?php get_template_part( 'inc/format/nav'); ?>

    <div id="foliowrap" class="about-me"> <!-- Isotope -->	
	    <div class="inner clearfix">


		<?php while ( have_posts() ) : the_post(); 
		
			get_template_part( 'inc/format/content', get_post_format() );

		endwhile; // end of the loop. ?>	




        </div>
		<?php bow_pagination( $pages = '', $range = 2 ); ?>
    </div>
</div>
</section>
<!-- footer -->
<footer class="footer">
	<div><?php bow_work_slogan(); ?></div>
</footer>
<!-- header -->
<?php get_footer(); ?>