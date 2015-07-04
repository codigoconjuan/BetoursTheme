<?php get_header(); ?>

        <div class="row">
                <!-- section -->
                <section class="column12" >
                      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    
                    <div class="destacada">
                        <?php the_post_thumbnail('large'); ?>
                        <h3><?php the_title(); ?></h3>
                    </div>
        </div>
                        
        <div class="row">
                        <!-- article -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class('column8'); ?>>

                                <?php the_content(); ?>


                                <br class="clear">

                                <?php edit_post_link(); ?>

                        </article>
                        <!-- /article -->

                <?php endwhile; ?>

                <?php else: ?>

                        <!-- article -->
                        <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                        </article>
                        <!-- /article -->

                <?php endif; ?>
                        
                        <div class="column4">
                            
                            <?php if (is_page('nosotros'))  { ?>
                                
                            <img id="img1" src="<?php echo get_post_meta( get_the_ID(), '_cmb_imagen1', true ); ?>">
                                
                            <img id="img2" src="<?php echo get_post_meta( get_the_ID(), '_cmb_imagen2', true ); ?>">
                            
                            
                          <?php   } ?>
                            
                        </div>

                </section>
                <!-- /section -->

                
        </div> <!-- FIN DE ROW -->

</div> <!-- FIN DE CONTAINER12-->

<?php get_footer(); ?>
