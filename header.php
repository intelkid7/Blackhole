<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php the_title(); ?></title>
    <?php
    wp_head();
    ?>
</head>

<body>
    <div class="nav-div">
        <nav class="nav-bar" id="nav-bar">
            <div class="logo-div">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <img class="logo" src="<?php echo $logo[0] ?>" alt="" />
            </div>
            <div class="menu-div" id="menu-div">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="menu" class="menu">%3$s</ul>',
                        )
                    );
                ?>
            </div>
            <button id="hamburger" class="hamburger">menu</button>
        </nav>
    </div>