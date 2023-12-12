<?php
/*Template name:Cart*/
?>

<?php get_header();
global $product;
?>
<main class="min-h-full ">
<div class="font-primary text-2xl md:text-3xl m-4 border-b p-2 border-black">Cart ></div>
    <section class="flex align-center my-10">

        <div class="flex flex-col w-full h-full justify-between items-center mx-2 md:mx-8 xl:mx-60 md:flex-row md:items-start">

            <div class="flex flex-col w-full h-full justify-center text-sm  md:w-2/3 md:text-lg">
                <div class="font-secondary text-2xl m-2 border-b-4 p-2 border-black">Items</div>
                <div class="flex w-full h-fit align-middle justify-center flex-col">
                    <!--Cart item titles-->
                    <div class="flex font-secondary-light w-[90%] mx-auto p-2 h-fit  border-black">
                        <!--Image-->
                        <div class="flex h-full w-1/5 items-center justify-center">
                            <h1>
                                Product
                            </h1>
                        </div>
                        <!--Item name-->
                        <div class="flex h-full w-1/5 items-center justify-center">
                            <h1>
                                Product Name
                            </h1>
                        </div>
                        <!--Item price-->
                        <div class="flex h-full w-1/5 items-center justify-center">
                            <h1>
                                Price
                            </h1>
                        </div>
                        <!--Quanitity-->
                        <div class="flex h-full  w-2/5 items-center justify-center">
                            <h1>
                                Quantity
                            </h1>
                        </div>
                        <!--Total-->
                        <div class="flex h-full w-1/5 items-center justify-center">
                            <h1>
                                Total
                            </h1>
                        </div>
                    </div>
                    <div class="flex flex-col w-full min-h-[350px] h-fit">
                        <?php
                        $cart_items = WC()->cart->get_cart();
                        // Check if the cart is not empty
                        if (!empty($cart_items)) {
                            // Loop through cart items
                            foreach ($cart_items as $cart_item_key => $cart_item) {
                                // Access item data
                                $product_id = $cart_item['product_id'];
                                $product = wc_get_product($product_id);
                                $product_name = $product->get_name();
                                $product_price = $product->get_price();
                                $product_quantity = $cart_item['quantity'];
                                $product_image = wp_get_attachment_image_src($product->get_image_id(), 'thumbnail');

                                ?>

                                <!--Cart item card-->
                                <div class="flex w-[90%] mx-auto p-2 h-fit border-b border-t border-black">
                                    <!--Image-->
                                    <div class="flex w-1/5 self-center justify-center">
                                        <img class="w-[80%] w-[80%] object-contain" src="<?php echo $product_image[0]; ?>" />
                                    </div>
                                    <!--Item name-->
                                    <div class="flex h-full w-1/5 self-center justify-center">
                                        <h1 class="font-secondary text-md font-sans text-orange-950 md:text-xl">
                                            <?php echo $product_name; ?>
                                        </h1>
                                    </div>
                                    <!--Item price-->
                                    <div class="flex h-full w-1/5 self-center justify-center">
                                        <h2>
                                            <?php echo $product_price; ?>
                                        </h2>
                                    </div>
                                    <!--Quanitity-->
                                    <div class="flex h-full justify-center self-center w-2/5 ">
                                        <div class="flex col w-full justify-center self-center">
                                            <button class="button_decr_item_quantity background-color-main m-2 text-lg"
                                                data-product-quantity=<?php echo $product_quantity; ?>
                                                data-product-cart-key=<?php echo $cart_item_key; ?>>
                                                <h2 class="w-6 aspect-square md:w-8">-</h2>
                                            </button>
                                            <h2 class="self-center ">
                                                <?php echo $product_quantity; ?>
                                            </h2>
                                            <button
                                                class="button_incr_item_quantity background-color-main m-2 text-lg "
                                                data-product-quantity=<?php echo $product_quantity; ?>
                                                data-product-cart-key=<?php echo $cart_item_key; ?>>
                                                <h2 class="w-6 aspect-square md:w-8">+</h2>
                                            </button>
                                        </div>

                                    </div>
                                    <!--Total-->
                                    <div class="flex h-full w-1/5 self-center justify-center">
                                        <h2>
                                            <?php echo WC()->cart->get_product_subtotal($product, $product_quantity); ?>
                                        </h2>
                                    </div>
                                </div>


                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="flex w-full  h-full justify-center flex-col md:w-1/3">
                <div class="flex w-full h-full px-4 background-color-main align-left flex-col">
                    <div class="font-secondary text-2xl m-2 border-b-4 p-2 border-black">Total</div>
                    <div class="m-2 ">
                        <div class="flex col justify-between my-2">
                            <h1> Total </h1>
                            <h1 class="">
                                <?php echo WC()->cart->get_total(); ?>
                            </h1>
                        </div>
                        <div class="flex col justify-between my-2">
                            <h1 class=""> Taxes</h1>
                            <?php echo WC()->cart->get_cart_contents_tax(); ?>
                        </div>

                        <div class="flex col justify-between my-2">

                            <h1 class=""> Subtotal:
                            </h1>
                            <?php echo WC()->cart->get_cart_subtotal(); ?>
                        </div>
                        <div class="flex w-full h-auto items-end col mt-8">
                            <div class="flex w-full items-end">
                                <a href="<?php echo wc_get_checkout_url() ?>"
                                    class="bg-black text-white w-full my-4 p-4 white-space font-secondary text-xl text-center hover:bg-white hover:text-black min-1340:text-l ">
                                    <h2 class="w-full h-full ">Checkout</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>