<?php get_header(); ?>


                <div class="row" >
                    <div class="column12 slider">
                        <h2 class="text-center"><span>Conoce nuestras unidades</span></h2>
                        <?php $args = array(
                            'post_type' => 'slider',
                            'posts_per_page' => -1,
                            'order' => 'DESC',
                            'orderby' => 'date'
                            
                        ); ?>
                        
                        
                        <div id="slideshow" >
                            <ul class="bxSlider">
                                <?php $slider = new WP_Query($args); while($slider->have_posts() ): $slider->the_post(); ?>
                                
                                <li>
                                	<?php $informacion = get_post_meta(get_the_ID(),'informacion',true); ?>
                                	<?php if($informacion)  { ?>
                                		  <p><?php echo $informacion; ?></p>
                                	<?php } ?>
                                	
                                	
                                	<?php $enlace = get_post_meta(get_the_ID(),'enlace',true); ?>
                                	<?php if($enlace) { ?>
										<a href="<?php echo $enlace;  ?>">Más información</a>
									<?php } else { ?>
										<a href="<?php echo get_permalink(14); ?>">Ver Unidades</a>
										
									<?php }?>                                  
                                    
                                    <?php the_post_thumbnail('large'); ?>
                                </li>
                                
                                <?php endwhile; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>

                
                <div class="row">
                    <div class="column12">
                         <h2 class="text-center"><span>Tenemos Vans a tu servicio</span></h2>
                         

                    </div>     
                </div>
                    

                <div id="van" class="row">
                    <?php $args = array(
                        'post_type' => 'vans',
                        'posts_per_page' => 2,
                        'order' => 'DESC',
                        'orderby' => 'date'
                        
                    ); ?>
                    
                    <?php $vans = new WP_Query($args); while($vans->have_posts() ): $vans->the_post(); ?>
                    
                    
                    <div id="<?php the_ID(); ?>" class="column6 amarilloVan" style="background-image: url(<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium', false, '' ); echo $src[0]; ?>); ">
                        <div class="infoVan">
                            <h4><?php the_title(); ?></h4>
                            
                            <?php echo get_post_meta(get_the_ID(),'especificaciones',true); ?>
                            
                            <div class="btnWrapper">
                                <a class="btn" href="<?php the_permalink(); ?>">mas información</a>
                            </div>
                        </div>
                    
                    </div>
                        
                        
                        <?php endwhile; wp_reset_postdata(); ?>


                </div>

</div> <!-- FIN CONTAINER12-->

         
                <div class="azul row">
                    
                        <div class="container12">
                            <h2 class="text-center blanco"><span>Nuestras unidades están equipadas con:</span></h2>
                            <div id="servicios" class="equipo">
                                    <div class="column3 text-center">
                                        <img id="aire" src="<?php echo get_stylesheet_directory_uri(); ?>/img/aire.png">
                                    </div>
                                    <div class="column3 text-center">
                                        <img id="musica" src="<?php echo get_stylesheet_directory_uri(); ?>/img/musica.png">
                                    </div>
                                    <div class="column3 text-center">
                                        <img id="pantalla" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pantalla.png">
                                    </div>
                                    <div class="column3 text-center">
                                        <img id="wc" src="<?php echo get_stylesheet_directory_uri(); ?>/img/wc.png">
                                    </div>
                            </div>
                        </div>

                </div>


<?php get_footer(); ?>
