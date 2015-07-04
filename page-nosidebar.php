<?php
/*
 * Template Name: No Sidebar
 */
 get_header(); ?>

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
                        <article id="post-<?php the_ID(); ?>" <?php post_class('column12'); ?>>
                            
                            

                                <?php the_content(); ?>


                                <br class="clear">

                                <?php edit_post_link(); ?>

                        </article>
                        <!-- /article -->

                <?php endwhile; endif; ?>
                        
                 

                </section>
                <!-- /section -->

                
        </div> <!-- FIN DE ROW -->

</div> <!-- FIN DE CONTAINER12-->

<?php get_footer(); ?>
