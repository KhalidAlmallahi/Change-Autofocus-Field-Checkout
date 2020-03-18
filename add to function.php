/**
* @snippet   Change autofocus field @ WooCommerce Checkout
* @author   Khalid Almallahi
* @testedwith   WooCommerce 3.3.4
*/
 
add_filter( 'woocommerce_checkout_fields', 'kotsh_change_autofocus_checkout_field' );
 
function kotsh_change_autofocus_checkout_field( $fields ) {
$fields['billing']['billing_first_name']['autofocus'] = false;
$fields['billing']['billing_email']['autofocus'] = true;
return $fields;
}
