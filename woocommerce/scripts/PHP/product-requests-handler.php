<!--Handle add product request -->
<?php
add_action('wp_ajax_update_cart_quantity', 'UpdateProductQuantity');
add_action('wp_ajax_nopriv_update_cart_quantity', 'UpdateProductQuantity');

function UpdateProductQuantity()
{
    if (isset($_POST['product_cart_key']) && isset($_POST['quantity'])) {
        $product_cart_key = $_POST['product_cart_key'];
        $quantity = intval($_POST['quantity']);

        if ($quantity > 0) {
            if (WC()->cart->set_quantity($product_cart_key, $quantity)) {
                wp_send_json_success(array('status' => 'success', 'message' => 'Cart updated successfully!'));
                return;
            }
        }
    }
    wp_send_json_error(array('status' => 'failed', 'message' => "Couldn't update quantity!"));
}
?>

<!--Handle pr request -->
 