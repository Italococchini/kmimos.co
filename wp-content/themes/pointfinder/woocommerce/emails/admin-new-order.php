<?php
	/**
	* Admin new order email
	*/

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	$info = kmimos_get_info_syte();

	add_filter( 'wp_mail_from_name', function( $name ) {
        global $info;
        return $info["titulo"];
    });
    add_filter( 'wp_mail_from', function( $email ) {
        global $info;
        return $info["email"]; 
    });

    // Modificacion Ángel Veloz
 	if( !isset($_SESSION) ){ session_start(); }		
 	global $current_user;		
 	$user_id = md5($current_user->ID);		
 	
 	$DS = kmimos_session();
 	if( isset( $DS["reserva"] ) ){			
 		$modificacion = 'Esta es una modificación de la reserva #: '.$DS["reserva"];
 	}else{		
 		$modificacion = "";		
 	}

	include("vlz_data_orden.php");

	$email_admin = $info["email"];

	$aceptar_rechazar = '
		<center>
			<p><strong>¿ACEPTAS ESTA RESERVA?</strong></p>
			<table> <tr> <td>
				<a href="'.get_home_url().'/wp-content/plugins/kmimos/order.php?o='.$orden_id.'&s=1&t=1" style="text-decoration: none; padding: 7px 0px; background: #00d2b7; color: #FFF; font-size: 16px; font-weight: 500; border-radius: 5px; width: 100px; display: inline-block; text-align: center;">
					Aceptar
				</a> </td> <td>
				 <a href="'.get_home_url().'/wp-content/plugins/kmimos/order.php?o='.$orden_id.'&s=0&t=1" style="text-decoration: none; padding: 7px 0px; background: #dc2222; color: #FFF; font-size: 16px; font-weight: 500; border-radius: 5px; width: 100px; display: inline-block; text-align: center;">
				 	Rechazar
				 </a> </td> </tr>
			</table>
		</center>
	';

	$dudas = '<p align="justify">Para cualquier duda y/o comentario puedes contactar al Staff Kmimos a los teléfonos '.$info["telefono"].', o al correo '.$info["email"].'</p>';

	global $wpdb;

	$metodo = $wpdb->get_var("SELECT meta_value FROM wp_postmeta WHERE meta_key = 'Metodo de Pago Usado' AND post_id = '{$orden_id}'");
	$order_total = $wpdb->get_var("SELECT meta_value FROM wp_postmeta WHERE meta_key = '_order_total' AND post_id = '{$orden_id}'");

	$metodo_card = array(
		"CREDIT_CARD",
		"2",
		"DEBIT_CARD",
		"6"
	);

	if( in_array($metodo, $metodo_card)  || (  ($order_total+0) == 0 ) ){
		include("otro.php");
	}else{
		include("tienda.php");
	}

?>