<?php
//Modification page boutique
add_action('woocommerce_before_main_content', 'tout_mobile_open_container_row', 5);
function tout_mobile_open_container_row(){
    echo '<div class="container shop-content">';
}

add_action('woocommerce_after_main_content', 'tout_mobile_close_container_row', 5);
function tout_mobile_close_container_row(){
    echo '</div>';
}

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

// add_filter('woocommerce_show_page_title', 'tout_mobile_remove_shop_title');
// function tout_mobile_remove_shop_title($val){
//     $val=false;
//     return $val;
// }

add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);