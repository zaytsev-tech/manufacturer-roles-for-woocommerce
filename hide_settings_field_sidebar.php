//Past this code in functions.php of active theme

function remove_admin_menu_items() {
	if(current_user_can('santbear_manufacturer') || current_user_can('santbear_specialist')) {
		remove_submenu_page('woocommerce', 'wc-settings');
		remove_submenu_page('woocommerce', 'wc-status');
		remove_submenu_page('woocommerce', 'wc-addons');
	}
}
add_action('admin_menu', 'remove_admin_menu_items', 999);


/*
 * BONUS CODE:
 * The function of viewing the names of items in the admin panel. 
 * This will help if you want to hide any other fields in the sidebar.
 * This function returns field names that can be hidden of methods 'remove_menu_page' or 'remove_submenu_page'.
*/
add_action( 'admin_init', 'santbear_debug_admin_menu' );
function santbear_debug_admin_menu() {
    echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
}
