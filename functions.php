function isa_woo_cart_attributes($cart_item, $cart_item_key){ 
global $product; 
if (is_cart()){ echo "<style>#checkout_thumbnail{display:none;}</style>"; } 
$item_data = $cart_item_key['data']; 
$post = get_post($item_data->id); 
$thumb = get_the_post_thumbnail($item_data->id, array( 32, 50)); 
echo '<div id="checkout_thumbnail" style="float: left; padding-right: 8px">' . $thumb . '</div> ' . $post->post_title; } add_filter('woocommerce_cart_item_name', isa_woo_cart_attributes, 10, 2);
