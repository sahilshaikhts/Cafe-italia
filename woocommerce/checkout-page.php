<?php
/*Template name:Checkout-page*/
get_header();
?>
<main class="min-h-full ">
    <div class="font-primary text-2xl md:text-3xl mx-4 border-b p-2 border-black">Checkout ></div>
    <section class="flex align-center my-2">
        <div class="flex flex-col w-full h-full justify-between items-center mx-8 xl:mx-60 md:flex-row">

            <div class="flex w-full h-full justify-center flex-col md:w-3/4">
                <form class="my-6" name="checkout" method="post" action="<?php echo esc_url(wc_get_checkout_url()); ?>"
                    enctype="multipart/form-data">
                    <div class="font-primary-light text-xl m-2 md:text-4xl">Billing/Shipping</div>
                    <div class="grid gap-x-6 gap-y-6 h-full w-full flex-col sm:grid-cols-2 md:gap-x-12 md:w-3/4">

                        <div class="flex flex-col items-left m-2 sm:col-span-2">
                            <h2 class="label_checkoutFormField">Email</h2>
                            <input class="w-full text-lg p-3 bg-[#cbc4b2] max-w-84 lg:text-xl" name="billing_email"
                                type="email" placeholder="Enter your email" />
                        </div>

                        <div class="flex flex-col items-left m-2">
                            <h2 class="label_checkoutFormField">Full name</h2>
                            <input class="w-full text-lg p-3 bg-[#cbc4b2] max-w-84 lg:text-xl" name="billing_first_name"
                                type="text" placeholder="First name" />
                        </div>

                        <div class="flex flex-col items-left  m-2">
                            <h2 class="label_checkoutFormField">Full name</h2>
                            <input class="w-full text-lg p-3 bg-[#cbc4b2] max-w-84 lg:text-xl" name="billing_last_name"
                                type="text" placeholder="Last name" />
                        </div>

                        <div class="flex flex-col items-left  m-2">
                            <h2 class="label_checkoutFormField">Phone number</h2>
                            <input class="w-full text-lg p-3 bg-[#cbc4b2] max-w-84 lg:text-xl" name="billing_phone"
                                type="number" placeholder="Phone number" />
                        </div>

                        <div class="flex flex-col items-left  m-2">
                            <h2 class="label_checkoutFormField">Street address</h2>
                            <input class="w-full text-lg p-3 bg-[#cbc4b2] max-w-84 lg:text-xl" name="billing_address_1"
                                type="text" placeholder="Street address" />
                        </div>

                        <div class="flex flex-col items-left  m-2">
                            <h2 class="label_checkoutFormField">City</h2>

                            <input class="w-full text-lg p-3 bg-[#cbc4b2] max-w-84 lg:text-xl" name="billing_city"
                                type="text" placeholder="City" />
                        </div>
                        <div class="flex flex-col items-left  m-2">
                            <h2 class="label_checkoutFormField">State/Province</h2>
                            <input class="w-full text-lg p-3 bg-[#cbc4b2] max-w-84 lg:text-xl" name="billing_state"
                                type="text" placeholder="State/Province" />
                        </div>

                        <div class="flex flex-col items-left m-2">
                            <h2 class="label_checkoutFormField">Country</h2>
                            <select name="billing_country" class="w-full text-lg p-3 bg-[#cbc4b2] lg:text-xl">
                                <?php
                                //Get and display country dropdown
                                $countries = WC()->countries->get_countries();
                                echo '<option value>Select country</option>';
                                foreach ($countries as $key => $country) {
                                    echo '<option value="' . $key . '">' . $country . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="flex flex-col items-left m-2">
                            <h2 class="label_checkoutFormField">Postal code</h2>
                            <input class="w-full text-lg p-3 bg-[#cbc4b2] lg:text-xl" name="billing_postcode"
                                type="text" placeholder="Postal code" />
                        </div>
                    </div>
                    <?php wp_nonce_field('woocommerce-process_checkout', 'woocommerce-process-checkout-nonce'); ?>

                    <div class="font-primary-light text-xl m-2 md:text-4xl">Payment</div>
                    <?php
                    //Display payment options
                    $payment_options = WC()->payment_gateways->get_available_payment_gateways();
                    foreach ($payment_options as $key => $option) {
                        ?>
                        <input value="<?php echo $option->id; ?>" type="radio" name="payment_method" class="m-2">
                        <label for="<?php echo $option->id; ?>">
                            <?php echo $option->get_title(); ?>
                        </label><br>
                        <?php
                    }
                    ?>
                    <input name="woocommerce_checkout_place_order"
                        class="w-full my-4 p-4 self-center bg-black text-white white-space font-secondary text-xl md:w-3/4 hover:bg-white hover:text-black min-1340:text-xl "
                        type="submit" value="Place order" />

                </form>

                <?php do_action('woocommerce_after_checkout_form', $checkout); ?>

            </div>
            <div class="flex w-full h-full justify-center flex-col md:w-1/4">
                <div class="flex w-full h-full min-h-[250px] px-4 justify-center background-color-main align-left flex-col">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>