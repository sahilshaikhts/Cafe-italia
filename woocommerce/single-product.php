<div class="shop-card shadow-xl">
    <div class="flex flex-col h-full bg-[#262926]">
        <div class="flex w-full justify-center">
            <div class="w-full overflow-hidden">
                <?php echo woocommerce_get_product_thumbnail() ?>
            </div>
        </div>
        <div class="flex w-full justify-between items-center p-2 px-4">
            <h1 class="font-secondary-light text-lg text-white text-center min-[1080px]:text-xl">
                <?php
                global $product;
                echo $product->get_title(); ?>
            </h1>
            <h3 class="font-secondary-light text-lg text-green-500 text-center">
                <?php
                global $product;
                echo $product->get_price(); ?>$
            </h3>
        </div>
        <div class="w-full h-fit ">
            <button class="w-full text-lg font-secondary bg-green-500 p-1 hover:text-white hover:bg-green-900">
                <a href='<?php global $product; echo $product->add_to_cart_url(); ?>'>Add</a>
                        </button>
        </div>
    </div>
</div>
                