<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0,maximum-scale=1.0  ">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<?php include (TEMPLATEPATH . '/galeria/gallery_header_include.php'); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="container12">

			<!-- header -->
			<header class="header row" role="banner">
                            
                    <div class="cotizacion column3">
                        <p>
                              <span class="icon-file"></span>
                              <a href="<?php echo get_permalink( 18 ); ?>">solicita una cotización</a></p>
                    </div>

					<!-- logo -->
					<div class="logo column6">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
                                        
                                        <div class="column3">
                                            <?php $args = array(
                                                'theme_location' => 'redes-menu',
                                                'menu' => 'Redes Sociales Menu',
                                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                            ); ?>

                                            <?php wp_nav_menu($args); ?>
                                        </div>

			</header>
			<!-- /header -->

                        <!-- nav -->
                        
                        <div class="row">
                            <nav class="nav column12" role="navigation">
                                    <?php $args = array(
                                        'theme_location' => 'header-menu',
                                        'menu' => 'Header Menu',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                    ); ?>

                                <?php wp_nav_menu($args); ?>


                            </nav>
                        </div>
                        <!-- /nav -->