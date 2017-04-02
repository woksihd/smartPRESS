<?php
/*
Template name: Index template
Description: -
*/

    get_header();
    if( have_posts() ):
        while( have_posts() ): the_post();
?>

<div class="breadcrumbs">
    BREADCRUMBS COMES HERE    
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="post-content">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>    
</div>

<?php
        endwhile;
    endif;
    get_footer();

?>