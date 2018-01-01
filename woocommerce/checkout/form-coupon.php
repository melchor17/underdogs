<?php
/**
 * Checkout coupon form
 *
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     2.2
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!WC()->cart->coupons_enabled()) {
    return;
}

?>
<div class="checkout-row col-lg-6 pull-right">
	<div class="title"><?php _e('Coupon', 'inwavethemes'); ?> <i class="fa fa-minus-square-o"></i>
	</div>
	<div class="box">
		<form method="post" class="checkout_coupon" style="display:block!important;padding:0;border:none;">

			<input type="text" name="coupon_code" class="input-text"
				   placeholder="<?php esc_attr_e('Coupon code', 'inwavethemes'); ?>" id="coupon_code" value=""/>

			<button type="submit" class="button" name="apply_coupon"
					value="<?php esc_attr_e('Apply Coupon', 'inwavethemes'); ?>"><em class="fa-icon"><i
						class="fa fa-check"></i></em><?php _e('Apply Coupon', 'inwavethemes'); ?></button>

		</form>
	</div>
</div>