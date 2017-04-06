<?php
/*
 *
 *FOOTER
 *
 */
?>
        </section>
        <footer>
            <section class="subscribe">
                <div class="content text-center">
                    <h1>The road is ahead of you!</h1>
                    <p>Subscribe to our newsletter!</p>
                    <script src="https://r3.minicrm.hu/api/minicrm.js?t=1491485179"></script>
                    <form FormHash="29638-24b9velvnr2fqh484rqa" action="https://r3.minicrm.hu/Api/Signup" method="post" class="TurnKeyCRM">

                        <!-- hiddens -->
                        <textarea  class="hidden" name="ToDo[2261][Comment]" id="ToDo_Comment_2261" language="HU">
                          Új feliratkozó érkezett az <?php the_title();?> oldalról! Vedd fel vele a kapcsolatot!
                        </textarea>
                        <textarea class="hidden" name="Project[2257][PageFilled]" id="Project_PageFilled_2257" language="HU"><?php the_permalink(); ?></textarea>

                        <!-- visible -->
                        <input class="form-control" name="Contact[2259][Email]" id="Contact_Email_2259" language="HU" type="text" placeholder="Email..." />
                        <input class="form-control" name="Contact[2259][FirstName]" id="Contact_FirstName_2259" language="HU" type="text" placeholder="Name..." />
                        <input id="Submit_29638-24b9velvnr2fqh484rqa" type="Submit" value="Elküld">

                        <!-- form respone -->
                        <div id="Response_29638-24b9velvnr2fqh484rqa" style="display: none;" class="Response"></div>

                    </form>
                </div>
            </section>
            <section class="social text-center">
                <div class="container">
                    <div class="icons">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </div>
                </div>
            </section>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
        $('.nav a').click(function (e) {
            $(this).tab('show');
            var tabContent = '#tabContent' + this.id;
            $('#tabContent1').hide();
            $('#tabContent2').hide();
            $('#tabContent3').hide();
            $(tabContent).show();
          });
        </script>

    </body>
</html>
