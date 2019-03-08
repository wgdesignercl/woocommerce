<?php
//* NO incluyas la etiqueta de apertura
add_filter( 'woocommerce_product_categories_widget_args', 'woo_product_cat_widget_args' );
function woo_product_cat_widget_args( $cat_args ) {
	$cat_args['exclude'] = array('18'); //* Incluye el ID de la categoría que deseas excluir
	return $cat_args;
}