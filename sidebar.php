<!-- sidebar -->
<aside class="sidebar column4 gris" role="complementary">

                            <h2 class="text-center">
                                <span>Otras unidades</span>
                            </h2>
                            
                          <?php  if ( 'autobus' == get_post_type() ) {
                             $args = array(
                                'post_type' => 'autobus',
                                'orderby' => 'rand',
                                'posts_per_page' => 2
                              );
                          } else if ('vans' == get_post_type()  ) {
                             $args = array(
                                'post_type' => 'vans',
                                'orderby' => 'rand',
                                'posts_per_page' => 1
                              );
                          } ?>
                          
                     <?php $unidades = new WP_Query($args); while($unidades->have_posts() ): $unidades->the_post(); ?>
                         
                           <div class="sideItem">
                               
                                   <a href="<?php the_permalink(); ?>">
                                       <h4><?php the_title(); ?></h4>
                                       <p><?php echo get_post_meta(get_the_ID(),'plazas',true); ?></p>
                                       <?php the_post_thumbnail('medium'); ?>
                                  </a>
                               
                           </div>
                         
                    <?php endwhile; wp_reset_postdata(); ?>


                          
     
</aside>
<!-- /sidebar -->
