<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                        <?php
                        // Check for post thumbnail
                        if (has_post_thumbnail( $post->ID ) ) { ?>
                        <div id="post-thumbnail">
                            <?php echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' ); ?>
                        </div>
                        <?php } ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			

			<div class="entry">
				<?php the_content('Läs mer...'); ?>
			</div>

                     <?php include (TEMPLATEPATH . '/inc/postmeta.php' ); ?>                       
			

		</div>

	<?php endwhile; ?>
	
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>
            <div class="info-h2">
		<h2><?php _e( 'Sidan du försökte nå verkar inte finnas tillgänlig.','ungpirat' ); ?></h2>
            </div>
	<?php endif; ?>