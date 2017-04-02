<?php
/*
 *
 *HEADER
 *
 */
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title><?php bloginfo( 'name' ); ?> - <?php the_title(); ?></title>
            <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin-ext" rel="stylesheet">
            <?php wp_head(); ?>
        </head>
        <?php
                    if ( is_front_page() ):
                        $classes = array('front-page', 'front-page-class');
                    elseif ( is_home() ):
                        $classes = array('home-page');
                    else:
                        $classes = array('not-home-page');
                    endif;
        ?>
        <body <?php body_class( $classes ); ?>>
            <section class="header">
                
            </section>
            <section class="index">