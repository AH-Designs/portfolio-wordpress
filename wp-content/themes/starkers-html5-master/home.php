<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

	<!--main content-->

<!--home page section intro-->

    <section class="main_crayons_image" class="main_welcome">
    
            <div class="logo_div">
                <img class="logo_image" src="<?php bloginfo('template_directory'); ?>/images/logo2.png"/>
                    <div class="quote_background">
                        <p class="welcome_quote">Web development is about using the whole box of crayons!</p>   
                    </div>
                   <Button class="skills_crayon_box"> <a href="/myskills.php"> <p>MY BOX OF CRAYONS</p></a></button>
            </div>

    </section>

<!--about me section-->

<section class="about_me" id="blue_gradient">
      <h2><a class="about-me-header" name="about-me">ABOUT ME</h2>

    <div class= "about_me_flex_container">

        <div class="bio_image bio_flex_item1 flex_item">
        </div>

        <div class="bio_text bio_flex_item2 flex_item" >
           
           <a name="about-me"></a> 
            <div class="bio_text_block">
           <h3>HELLO...</h3>
            <p class="intro_bio">...my name is Amber Hoddinott...</p>

            <p class="main_text_bio">Im am a Web Designer and Developer. I have a passion for creating professional looking websites. 
            I love coding and taking risks with my code to develop stunning, professional websites. So my clients can go away  feeling happy and confident their customers are experiencing the best user experience possible. 

            Creativity runs through my veins, Ive always enjoyed carrying out my own creative projects, so I decided to take the next step and teach myself design.
            I am currently looking for work and this portfolio website is to show employers my previous projects.
            If you have any questions, feedback, or just want to say hello, feel free to contact me!
            </p>

                <div class="button_flex_container">

                      <button id="contact_button"> <a href="/contactme.php">CONTACT ME!</a></button>

                </div>

            </div>
            
        </div>

    </div>



</section>




</div> <!--end of wrapper div-->
<!--page footer-->

<?php get_footer(); ?>