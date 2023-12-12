<?php
$args = array(
    'post_type' => 'menu_item',
    'post_per_pagge' => -1
);
//Retrive custom posts.
$menu_items = new WP_Query($args);

if ($menu_items->have_posts()) {
    ?>
    <section id="menu" class="flex relative justify-center items-center min-h-fit  bg-amber-300
        bg-no-repeat bg-cover bg-center snap-center snap-normal">

        <div class="flex flex-col justify-between w-full h-full items-center mx-8 xl:mx-60 lg:flex-row">
            <div class="flex w-full justify-center my-14 lg:w-1/2 lg:justify-start">
                <h1 class="font-primary text-4xl md:text-5xl">Menu</h1>
            </div>

            <div class="grid_menu grid grid-cols-2 md:grid-cols-3 my-14 lg:w-2/3 gap-4">
                <?php
                //loop through each post.
                while ($menu_items->have_posts()) {
                    $menu_items->the_post();
                    $post_id = get_the_ID();
                    $img_args = array(
                        'post_type' => 'attachment',
                        'posts_per_page' => 1,
                        'post_parent' => $post_id,
                    );

                    // Get attachments
                    $thumbnail = get_posts($img_args);
                    $thumbnail_url = wp_get_attachment_url($thumbnail[0]->ID);
                    //Get price field data
                    $price = get_post_meta($post_id, 'Price', true);
                    ?>
                    <div>
                        <div class="relative flex w-full h-full flex-col  justify-between">
                            <div class="flex w-full h-full justify-center">
                                <div class="w-full h-full overflow-hidden">
                                    <img class="w-full h-full object-contain ease-in-out duration-300 hover:scale-125"
                                        src="<?php echo $thumbnail_url ?>" />
                                </div>
                            </div>

                            <div class=" absolute bottom-0 flex w-full bg-[#262926] justify-between items-center p-2 px-4">
                                <h1 class="font-secondary text-xl text-white text-center min-[1080px]:text-2xl">
                                    <?php the_title(); ?>
                                </h1>
                                <h3 class="font-secondary text-lg text-green-500 text-center  min-[1340px]:text-xl">
                                    <?php echo $price . ' '; ?>$
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php

                }
                ?>
            </div>
        </div>
    </section>
    <?php
    wp_reset_postdata(); 
}
?>