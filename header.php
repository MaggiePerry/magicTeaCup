<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Maggies Blog">
    <meta name="author" content="Maggie Perry">    
    <link rel="magicteacup-logo" href="wp-content/themes/magicteacuptheme/assets/images/woe.png"> 
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
     <?php
        wp_head();
     ?>
</head> 
<body>
    <header class=" header navbar navbar-expand-lg">
        <div class="navbar-brand">
            <?php
                // Output custom logo
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
            ?>
            <img class="bi mx-2 logo" src="<?php echo $logo[0] ?>" alt="logo">
            <a class="fs-4 text-decoration-none" href="<?php echo home_url(); ?>"> <?php echo get_bloginfo('name'); ?> </a>
        </div>
        <nav>  
            <?php
                wp_nav_menu(
                    array(
                        'menu'              => 'primary',
                        'container'         => '',
                        'theme_location'    => 'primary',
                        'items_wrap'        => '<ul class="navbar-nav mr-auto">%3$s</ul>'
                    )
                );
            ?>
            <?php
                // dynamic_sidebar('sidebar-1');
            ?>
        </nav>
    </header>
    <div class="main-wrapper">
        <?php if(!is_front_page()) {?>
            <header class="header p-4">
                <h1 class="heading"><?php the_title() ?></h1>
            </header>
        <?php } ?>