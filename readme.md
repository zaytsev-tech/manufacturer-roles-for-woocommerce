Hi!

I'm create roles users for online shop on Wordpress. The roles differentiation of rights users who will need access to dashboard WP.

Created 2 roles - Specialist, Manufacturer.

Specialist - monitors orders and comments of clients. He sees telephones and adresses of clients, but can't add new products and changes pages.

Manufacturer monitors orders of clients and add/change products. He can't delete and change webpages and products.

!!!You will need to work with the database. Back up your database before making changes!!! 

!File: default_roles - contain default roles of users in Wordpress. If you need to revert changes.

File: roles_specialist_and_manufacturer - contain default roles + specialist and manufacturer.
Code from file add to -> Database -> table: wp_options -> option_name: wp_user_roles -> option_value.

File: disable_telephone_number_field - disable field "Phone number of client" on edit order page for users with role 'santbear_manufacturer'
Code from file add to -> <your sitename>/wp-content/plugins/woocommerce/includes -> wc-core-functions.php-> in line 1973-1990

File: hide_settings_field_sidebar - hide fields "Settings", "Status", "Addons" from Woocommerce menu in admin sidebar for roles 'santbear_manufacturer' and 'santbear_specialist'. For these roles such fields don't need. + Bonus function for debug other fields.
Code from file add to functions.php of active theme.


