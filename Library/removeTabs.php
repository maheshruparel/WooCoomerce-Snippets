// File : functions.php

// Remove WooCommerce Tabs - this code removes all 3 tabs - to be more specific just remove actual unset lines 

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 10 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );    // Remove the description tab
    unset( $tabs['reviews'] )   		  // Remove the reviews tab
    unset( $tabs['any_other'] );  // Remove the any other tab

    return $tabs;

}
