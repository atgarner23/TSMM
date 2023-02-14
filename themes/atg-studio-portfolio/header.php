<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); //HOOK. required for plugins to work with the theme ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); //HOOK. required for plugins to work ?>
    <div class="site">
        <header class="header">
            <div class="header-bar">
                <h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h2><?php bloginfo('description'); ?></h2>
                <nav>
                    <ul class="menu">
                        <?php wp_list_pages(array(
                            'title_li' => ''
                        )); ?>
                    </ul>
                </nav>

                <?php get_search_form(); //include searchform.php or do the default search bar ?>

            </div>
        </header>