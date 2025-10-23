<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <header>
        <nav class="navBar">
            <ul class="nav-left">
                <li class="title-nav">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Copilot_20251014_235219.png" alt="Foto-logo"></a>
                </li>
            </ul>
            <nav class="nav-right">
                <ul>
                    <li><a href="<?php echo site_url('/sobre-mi'); ?>">sobre mi</a></li>
                </ul>
                <ul>
                    <li><a href=""> porfolio</a></li>
                </ul>
                <ul>
                    <li><a href="">codigos y capturas</a></li>
                </ul>
            </nav>

        </nav>

    </header>

</head>

<body>