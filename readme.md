Hi!

I'm create roles users for online shop on Wordpress. The roles differentiation of rights users who will need access to dashboard WP.

Created 2 roles - Specialist, Manufacturer.

Specialist - monitors orders and comments of clients. He sees telephones and adresses of clients, but can't add new products and changes pages.

Manufacturer monitors orders of clients and add/change products. He can't delete and change webpages and products.

!!!You will need to work with the database. Back up your database before making changes!!! 

Text from file add to -> Database -> table: wp_options -> option_name: wp_user_roles -> option_value.

Files:

default_roles - contain default roles of users in Wordpress. If you need to revert changes.
roles_specialist_manufacturers - contain default roles + specialist and manufacturer.


