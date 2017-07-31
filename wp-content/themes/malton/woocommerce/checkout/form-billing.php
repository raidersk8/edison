<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/** @global WC_Checkout $checkout */

?>
<?php $i=0; foreach ( $checkout->get_checkout_fields( 'billing' ) as $key => $field ) : $i++; ?>
	<div class="form-group">
		<div class="wrap-form-control"><?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?></div>
	</div>	
	<?php if($i == 2) : ?>
		</div>
		<div class="col-sm-6 col-xs-12">
	<?php endif; ?>
<?php endforeach; ?>