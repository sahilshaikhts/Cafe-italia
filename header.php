<!DOCTYPE html>
<html class="h-full scroll-smooth snap-y snap-mandatory" <?php language_attributes()?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://kit.fontawesome.com/84cd74cfd4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>
 

<body class="h-full background-color-lighter h-[100%]">
    
<header id="navbar"
        class="flex justify-between items-center w-full h-16 py-2 background-color-nav md:h-20">

        <?php
        $logo_url = wp_get_attachment_image_src(get_theme_mod('custom_logo'));
        ?>
        <a href="/" class="flex w-12 h-full ml-6 md:w-16"><img class="w-full h-full object-fit "
                src="<?php echo $logo_url[0]; ?>" /></a>
        <?php
        wp_nav_menu(
            array(
                'menu' => 'nav-menu',
                'container' => 'false',
                'menu_class' => 'flex flex-row',
            ));
        ?>
        </ul>

    </header>