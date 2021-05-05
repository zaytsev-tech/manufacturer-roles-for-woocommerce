/**
 * !!!Past this code to file "wc-core-functions.php" in line 1973-1990!!!
 *
 * Convert plaintext phone number to clickable phone number.
 *
 * Remove formatting and allow "+".
 * Example and specs: https://developer.mozilla.org/en/docs/Web/HTML/Element/a#Creating_a_phone_link
 *
 * @since 3.1.0
 *
 * @param string $phone Content to convert phone number.
 * @return string Content with converted phone number.
 */
function wc_make_phone_clickable( $phone ) {
	if(!current_user_can('santbear_manufacturer')) {
		$number = trim( preg_replace( '/[^\d|\+]/', '', $phone ) );

		return $number ? '<a href="tel:' . esc_attr( $number ) . '">' . esc_html( $phone ) . '</a>' : '';
	}
}
