<?php get_header();
/*Template Name: Shop */
global $product;
?>
<main class="min-h-full">
    <section class="flex flex-col align-center w-[80%] min-h-[fit] mx-auto my-12 ">
    <div class="font-primary text-2xl md:text-3xl m-4 border-b  p-2 border-black">Shop ></div>
        <div class="shop-grid">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
            );

            $loop = new WP_Query($args);
            if ($loop->have_posts()) {
                while ($loop->have_posts()) {
                    $loop->the_post();
                    wc_get_template_part('woocommerce/single', 'product');
                }
            }
            ?>
        </div>
    </section>
    
</main>
<?php get_footer(); ?>