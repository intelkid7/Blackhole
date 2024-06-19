<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php the_title(); ?></title>
    <?php
    wp_head();
    ?>
    <!-- <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" /> -->
    <script defer src="wp-content/themes/black-hole/assets/js/script.js"></script>
</head>

<body>
    <div class="nav-div">
        <nav class="nav-bar">
            <div class="logo-div">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <img class="logo" src="<?php echo $logo[0] ?>" alt="" />
            </div>
            <div class="menu-div">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="menu">%3$s</ul>',
                        )
                    );
                ?>
                <!-- <ul class="menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#about">FAQs</a></li>
                    <li class="menu-store">
                        <span><a href="#about">Store</a></span>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul> -->
            </div>
        </nav>
    </div>