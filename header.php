<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        
        <section class="Info-promo btn-primary"><p class="text-center"><span> Info principal sur livraison ou autre</span></p></section>
            
        </section>

        <!-- <div class="search-form mb-2 container w-75"><?php get_search_form(); ?></div> -->


         <?php if(has_custom_logo()): ?>
        <section class="brand"><?php the_custom_logo(); ?></section>
        <?php else: ?>
        <section class="brand"><img src="https://image.shutterstock.com/image-vector/mobile-logo-260nw-746834392.jpg"
         alt="logo"></section>            
        <?php endif ?>

       
        <section class="second-column">
            <!-- <div class="w-100" syle="height:100px">
                <span class="items">
                        <ul class="navbar-nav float-left d-flex" >
                            <li style="align-items:center">
                                <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))) ?>" class="nav-link">Mon Compte</a>
                            </li>
                            <li style="align-items:center">
                                <a href="<?php echo esc_url(wp_logout_url(get_permalink(get_option('woocommerce_myaccount_page_id')))) ?>" class="nav-link">Se déconnecter</a>
                            </li>
                        </ul>
                </span>               
            </div>             -->
            <?php if(class_exists('Woocommerce')): ?>
            <div class="account btn-white">
            <ul class="d-flex m-0 p-0" >
                <?php if(is_user_logged_in()): ?>
                            <li style="list-style:none">
                                <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))) ?>" 
                                class="nav-link"
                                >Mon Compte</a>
                            </li>
                            <li style="list-style:none">
                                <a href="<?php echo esc_url(wp_logout_url(get_permalink(get_option('woocommerce_myaccount_page_id')))) ?>" 
                                class="nav-link"
                                >Se déconnecter</a>
                            </li>
                    <?php else: ?>
                        <li style="list-style:none">
                                <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))) ?>" 
                                class="nav-link"
                                >Se connecter/ Créer un compte</a>
                            </li>
                    <?php endif; ?>
                        </ul>
            </div>
            <?php endif; ?>
            <div class="cart text-right btn-warning">

  
                <a href="<?=wc_get_cart_url()?>"><span class="cart-icon">panier</span>
                <span class="items">(<?php echo WC()->cart->get_cart_contents_count();?>)</span></a>
            </div>

            <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'tout_mobile_main_menu',
                        'depth'             => 3,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div>
            </nav>

        </section>

        </div>
    </header>