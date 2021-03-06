<?php

/**

 * Vendor new order email

 *

 * @author WooThemes

 * @package WooCommerce/Templates/Emails/HTML

 * @version 2.0.0

 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>



<?php 



//do_action( 'woocommerce_email_header', $email_heading ); 



echo kmimos_get_email_header();

/*

*   Coloca el contenido

*/

$html .= '    <div class="container">';

$html .= '      <span class="title">'.$email_heading.'</span>';

$html .= '      <div class="content">';



echo $html;



?>



<p><?php printf( __( 'You have received an order from %s. Their order is as follows:', 'wcvendors' ), $order->billing_first_name . ' ' . $order->billing_last_name ); ?></p>



<?php do_action( 'woocommerce_email_before_order_table', $order, true ); ?>



<h2><?php printf( __( 'Order: %s', 'wcvendors'), $order->get_order_number() ); ?> (<?php printf( '<time datetime="%s">%s</time>', date_i18n( 'c', strtotime( $order->order_date ) ), date_i18n( woocommerce_date_format(), strtotime( $order->order_date ) ) ); ?>)</h2>



<table cellspacing="0" cellpadding="6" style="width: 100%; border: 1px solid #eee;" border="1" bordercolor="#eee">

	<thead>

		<tr>

			<th scope="col" style="text-align:left; border: 1px solid #eee;"><?php _e( 'Product', 'wcvendors' ); ?></th>

			<th scope="col" style="text-align:left; border: 1px solid #eee;"><?php _e( 'Quantity', 'wcvendors' ); ?></th>

			<th scope="col" style="text-align:left; border: 1px solid #eee;"><?php _e( 'Price', 'wcvendors' ); ?></th>

		</tr>

	</thead>

	<tbody>

		<?php echo $order->email_order_items_table( array(

			'show_sku'      => true,

			'show_image'    => false,

			'image_size'    => array( 32, 32 ),

			'plain_text'    => false,

			'sent_to_admin' => false

		) ); ?>

	</tbody>

	<tfoot>

		<?php

			if ( $totals = $order->get_order_item_totals() ) {

				$i = 0;

				foreach ( $totals as $total ) {

					$i++;

					?><tr>

						<th scope="row" colspan="2" style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['label']; ?></th>

						<td style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['value']; ?></td>

					</tr><?php

				}

			}

		?>

	</tfoot>

</table>



<?php do_action('woocommerce_email_after_order_table', $order, true); ?>



<?php do_action( 'woocommerce_email_order_meta', $order, true ); ?>



<h2><?php _e( 'Customer details', 'wcvendors' ); ?></h2>



<?php if ( $order->billing_email ) : ?>

	<p><strong><?php _e( 'Email:', 'wcvendors' ); ?></strong> <?php echo $order->billing_email; ?></p>

<?php endif; ?>

<?php if ( $order->billing_phone ) : ?>

	<p><strong><?php _e( 'Tel:', 'wcvendors' ); ?></strong> <?php echo $order->billing_phone; ?></p>

<?php endif; ?>



<?php wc_get_template( 'emails/email-addresses.php', array( 'order' => $order ) ); ?>



<?php 

$gretting = 'Atentamente,';



$html = '      </div>

      <div class="gretting">

        <span>'.$gretting.'</span><br>

        <img src="'.get_home_url().'/wp-content/uploads/2016/03/logo-kmimos_120x30.png" alt="Firma Kmimos">

      </div>';



/*

*   Introduce los banners

*/

$html .= kmimos_get_email_banners();

/*

*   Fin de los banners

*/

$html .= '    </div>';

/*

*   Empieza el pie del correo

*/

$html .= kmimos_get_email_footer();

echo $html;

//do_action( 'woocommerce_email_footer' ); ?>