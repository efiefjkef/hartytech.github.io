<?php
    $header_bg = get_post_meta(get_the_id(), 'doxy_post_title_bg_color', true);
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e ( 'Skip to content', 'doxylite' ); ?></a>
    <!-- Loading -->
    <div class="loading-main">
        <div class="pre-loader">
            <div class="loading">
                <div class="bounceball"></div>
                <div class="text"><?php  esc_html_e('Now Loading', 'doxylite'); ?></div>
            </div>
        </div>
    </div>
    
    
    <header class="header-area <?php if(is_user_logged_in()){echo 'top32px';}?>">
        <div class="header-navigation">
            <div class="container">
                <div class="navigation-box">
                <div class="navigation-left">
					<?php if (has_custom_logo()) : ?>
						<div class="site-logo"><?php the_custom_logo(); ?></div>
					<?php endif; ?>

                    <?php $blog_info = get_bloginfo('name'); ?>
                    
					<?php if (!empty($blog_info) && display_header_text()) : ?>

						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						
						<?php $description = get_bloginfo('description', 'display');
							if ($description || is_customize_preview()) : ?>
							<p class="site-description">
								<?php echo esc_html($description); ?>
							</p>
						<?php endif; ?>
						
                    <?php endif; ?>
                    
				</div>
                    <?php
                        if ( has_nav_menu('primary_menu' ) ) {?>
                             <div class="navigation-right">
                                <nav class="navigation-navbar">
                                    <?php
                                       get_template_part('template-parts/primary-menu', 'primary-menu'); 
                                       get_template_part('template-parts/responsive-menu', 'mobile-menu'); 
                                    
                                    ?>
                                </nav>
                                
                            </div>
                       <?php
                       } 
                      
                    ?> 
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->