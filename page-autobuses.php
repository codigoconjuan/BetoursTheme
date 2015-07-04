<?php
/*
 * Template Name: Autobuses
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
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            
                            
                            <h2 class="text-center">
                                <span>Nuestras unidades</span>
                            </h2>
                              
                              <?php $args = array(
                                'post_type' => 'autobus',
                                'orderby' => 'title',
                                'order' => 'ASC',
                              ); ?>
                              
                              <?php $autobuses = new WP_Query($args); while($autobuses->have_posts() ): $autobuses->the_post(); ?>
                               

								<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium', false, '' );  ?>
                                <div id="<?php the_ID(); ?>" class="column6 itemAutobus" style="background-image: url(<?php echo $src[0]; ?>); ">
                                        <div class="infoBus">
                                            <h4><?php the_title(); ?></h4>
                                            
                                            <?php echo get_post_meta(get_the_ID(),'especificaciones',true); ?>
                                            
                                            <div class="clear"></div>
                                            
                                            <div class="btnWrapper">
                                                <a class="btn" href="<?php the_permalink(); ?>">mas información</a>
                                            </div>
                                        </div>
                                
                                </div>
                                  
                              <?php endwhile; wp_reset_postdata(); ?>
                              


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
                        
                  

                </section>
                <!-- /section -->

                
        </div> <!-- FIN DE ROW -->

</div> <!-- FIN DE CONTAINER12-->

<?php get_footer(); ?>
