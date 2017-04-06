<?php
/*
Template name: Simple Dark LP
Description: Template for landing pages
*/

    get_header();
    if( have_posts() ):
        while( have_posts() ): the_post();
?>

<div class="post-content">
    <section class="dark">
            <div class="lp-form">
              <script src="https://r3.minicrm.hu/api/minicrm.js?t=1491485179"></script>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>

                    <ul class="nav nav-pills nav-justified">
                        <li><a id="1" data-target="#tabContent1">Personal</a></li>
                        <li><a id="2" data-target="#tabContent2">I am a business</a></li>
                    </ul>
                    <div class="tabContent" id="tabContent1" style="display: none;">
                        <form FormHash="29638-21x39kk5cx1iqs3zcueo" action="https://r3.minicrm.hu/Api/Signup" method="post" class="TurnKeyCRM">
                          <!-- visibles -->
                            <input class="form-control" name="Contact[2229][FirstName]" id="Contact_FirstName_2229" language="HU" type="text" placeholder="Your firstname..."/>
                            <input class="form-control" name="Contact[2229][LastName]" id="Contact_LastName_2229" language="HU" type="text" placeholder="Your lastname..."/>
                            <input class="form-control" name="Contact[2229][Email]" id="Contact_Email_2229" language="HU" type="text" placeholder="Your email address..."/>
                            <input class="form-control" name="Contact[2229][Phone]" id="Contact_Phone_2229" language="HU" type="text" placeholder="Your phone number..."/>
                            <input id="Submit_29638-21x39kk5cx1iqs3zcueo" type="Submit" value="Elküld">

                          <!-- hiddens -->
                            <textarea class="hidden" name="Project[2227][PageFilled]" id="Project_PageFilled_2227" language="HU"><?php the_permalink(); ?></textarea>
                            <textarea class="hidden" name="ToDo[2231][Comment]" id="ToDo_Comment_2231" language="HU">Ajánlatkérés érkezett magánszemélytől</textarea>

                          <!-- response -->
                            <div class="text-center" id="Response_29638-21x39kk5cx1iqs3zcueo" style="display: none;" class="Response"></div>

                    </div>
                    <div class="tabContent" id="tabContent2" style="display: none;">
                        <form FormHash="29638-1lten8khoh0ox014xe9x" action="https://r3.minicrm.hu/Api/Signup" method="post" class="TurnKeyCRM">

                          <!-- visibles -->
                            <input class="form-control" name="Contact[2234][Name]" id="Contact_Name_2234" language="HU" type="text" placeholder="Name of your company..." />
                            <input class="form-control" name="Contact[2235][FirstName]" id="Contact_FirstName_2235" language="HU" type="text" placeholder="Your name..."/>
                            <input class="form-control" name="Contact[2235][Email]" id="Contact_Email_2235" language="HU" type="text" placeholder="Your email address... "/>
                            <input class="form-control" name="Contact[2235][Phone]" id="Contact_Phone_2235" language="HU" type="text" placeholder="Your phone number... "/>
                            <input  id="Submit_29638-1lten8khoh0ox014xe9x" type="Submit" value="Elküld">

                          <!-- hiddens -->
                            <textarea class="hidden" name="ToDo[2237][Comment]" id="ToDo_Comment_2237" language="HU">Céges ajánlatkérés érkezett!</textarea>
                            <textarea class="hidden" name="Project[2233][PageFilled]" id="Project_PageFilled_2233" language="HU"><?php the_permalink(); ?></textarea>

                          <!-- response -->
                            <div class="text-center" id="Response_29638-1lten8khoh0ox014xe9x" style="display: none;" class="Response"></div>
                        </form>
                    </div>
            </div>
    </section>
</div>

<?php
        endwhile;
    endif;
    get_footer();

?>
