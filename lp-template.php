<?php
/*
Template name: Landing Pages
Description: Template for landing pages
*/

    get_header();
    if( have_posts() ):
        while( have_posts() ): the_post();
?>

<div class="breadcrumbs">
    BREADCRUMBS COMES HERE <?php the_category();?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="post-content">
                Ide jön a landing page!
            </div>
        </div>
    </div>
</div>

<?php
        endwhile;
    endif;
    get_footer();

?>
