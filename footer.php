
                        <!-- footer -->
			<footer class="footer" role="contentinfo">
                             
                            <div class="container12">

                                    <nav class="column10">
                                        
                                            <?php $args = array(
                                                'theme_location' => 'header-menu',
                                                'menu' => 'Header Menu',
                                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                            ); ?>

                                            <?php wp_nav_menu($args); ?>      
                                        
                                    </nav>
  
                                    <nav class="right column2">
                                            <?php $args = array(
                                                'theme_location' => 'redes-menu',
                                                'menu' => 'Redes Sociales Menu',
                                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                            ); ?>

                                            <?php wp_nav_menu($args); ?>   
                                        
                                    </nav>
                            </div>


			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>



	</body>
</html>
