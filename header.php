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
            <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,500,700&amp;subset=latin-ext" rel="stylesheet">
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
               
                <nav class="navbar navbar-fixed-top shadow-bar">
                    <div class="container-fluid"> 
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">smartPRESS</a>
                        </div>
                        
                        <div class="collapse navbar-collapse">
                            <ul class="navbar navbar-nav">
                                
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <div class="header-img">
                    <div class="container">
                        <div class="title">
                            <h1> <?php bloginfo( 'name' ); ?> </h1>
                            <p> <?php bloginfo( 'description' ); ?> </p>
                        </div>
                    </div>
                </div>
                
            </section>
            <section class="index">