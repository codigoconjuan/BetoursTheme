<?php
/*
 * Template Name: Vans
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
                                <span>Conoce nuestras Vans a continuación:</span>
                            </h2>
                              
                              <?php $args = array(
                                'post_type' => 'vans',
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'posts_per_page' => -1
                              ); ?>
                              
                              <?php $autobuses = new WP_Query($args); while($autobuses->have_posts() ): $autobuses->the_post(); ?>
                               


                                <div id="<?php the_ID(); ?>" class="column6 amarilloVan" style="background-image: url(<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium', false, '' ); echo $src[0]; ?>); ">
                                        <div class="infoVan">
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



                <?php endwhile;  endif; ?>
                        
                  

                </section>
                <!-- /section -->

                
        </div> <!-- FIN DE ROW -->

</div> <!-- FIN DE CONTAINER12-->

<?php get_footer(); ?>
