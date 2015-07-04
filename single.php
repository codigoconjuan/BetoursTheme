<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    
            <!-- post thumbnail -->
                    <div class="destacada">
                        <?php the_post_thumbnail('large'); ?>
                        <h3><?php the_title(); ?></h3>
                    </div>
            <!-- /post thumbnail -->
       
        <div class="row">
    		<!-- article -->
    		<article id="post-<?php the_ID(); ?>" <?php post_class('column8'); ?>>
    
                            <h2 class="text-center">
                                <span>Galeria de Imagenes</span>
                            </h2>

    
    		              	<?php the_content(); // Dynamic Content ?>
    		              	
    		              	<div class="clear"></div>
    		              	
    		              	<br/>
                            <h2 class="text-center">
                                <span>Especificaciones de esta Unidad</span>
                            </h2>
                            
                             <?php echo get_post_meta(get_the_ID(),'especificaciones',true); ?>
    
    			
    
    
    

    		</article>
    		<!-- /article -->
             <?php get_sidebar(); ?>
             
             <div class="clear"></div>
    
    <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
    
    	<?php endwhile; endif; ?>

	</section>
	<!-- /section -->

        </div> <!-- FIN DE ROW -->

</div> <!-- FIN DE CONTAINER12-->


<?php get_footer(); ?>
