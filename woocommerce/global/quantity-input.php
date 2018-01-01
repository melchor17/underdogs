<?php
/**
 * Product quantity inputs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( $max_value && $min_value === $max_value ) {
	?>
	<div class="quantity hidden">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
?>
	<div class="quantity add-to-cart">
	    <input type="text" id="qty" step="<?php echo esc_attr( $step ); ?>" <?php if ( is_numeric( $min_value ) ) : ?>min="<?php echo esc_attr( $min_value ); ?>"<?php endif; ?> <?php if ( is_numeric( $max_value ) ) : ?>max="<?php echo esc_attr( $max_value ); ?>"<?php endif; ?> name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>" title="<?php esc_attr_e( 'Qty', 'Product quantity input tooltip', 'inwavethemes' ) ?>" class="input-text qty text" size="4" />
	    <span onclick="increaseQty(this,<?php echo esc_attr( $step ); ?>)" class="increase-qty"><i class="fa fa-sort-up"></i></span>
	    <span onclick="decreaseQty(this,<?php echo esc_attr( $step ); ?>)" class="decrease-qty"><i class="fa fa-sort-down"></i></span>

	</div>
	<?php
}
