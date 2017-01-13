<?php
/**
 * The template for displaying the site's front page
 *
 */

get_header(); ?>

<?php
// slider
if ( function_exists( 'soliloquy' ) ) { soliloquy( '8' ); }	
?>	


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php

		// custom loop - fun posts
		
		$args = array(
			'posts_per_page' => 5,
			'category_name' => 'fun'
		);
		
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			
			echo '<section class="latests-posts home-loop">';
			
				echo '<h3>Fun Posts</h3>';
				echo '<ul>';
				
					while( $query->have_posts() ) : $query->the_post();
					
					echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
					
					endwhile;
					rewind_posts();
				
				echo '</ul>';
				
			echo '</section>';
		}
		
		// custom loop - WordPress posts
		
		$args = array(
			'posts_per_page' => 5,
			'category_name' => 'wordpress'
		);
		
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			
			echo '<section class="latests-posts home-loop">';
			
				echo '<h3>Learn about WordPress</h3>';
				echo '<ul>';
				
					while( $query->have_posts() ) : $query->the_post();
					
					echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
					
					endwhile;
					rewind_posts();
				
				echo '</ul>';
				
			echo '</section>';
		}
			
		?>	
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
