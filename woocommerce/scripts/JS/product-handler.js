jQuery(document).ready(function () {

    //Setup button: button_decr_item_quantity 
    jQuery('.button_decr_item_quantity').on('click', function (e) {
        var product_cart_key = jQuery(this).data('product-cart-key');
        //Get the current quanitity and subtract by 1;
        var quanitity = jQuery(this).data('product-quantity') - 1;
        if (quanitity >= 0) {
            UpdateCartQuantity(product_cart_key, quanitity, () => { location.reload(); });      //Referesh doesnt update value always
        }
    });

    //Setup button: button_incr_item_quantity 
    jQuery('.button_incr_item_quantity').on('click', function (e) {

        var product_cart_key = jQuery(this).data('product-cart-key');
        //Get the current quanitity and subtract by 1;
        var quanitity = jQuery(this).data('product-quantity') + 1;
        if (quanitity > 0) {
            UpdateCartQuantity(product_cart_key, quanitity, () => { location.reload(); });  //Referesh doesnt update value always
        }
    });
});

function UpdateCartQuantity(product_cartKey, quantity, onComplete) {
    jQuery.ajax({
        type: "POST",
        url: ajax_object.ajax_url,
        data: {
            action: 'update_cart_quantity',
            product_cart_key: product_cartKey,
            quantity: quantity
        },
        dataType: "json",
        complete:function()
        {
            onComplete();
        }
    });
}

