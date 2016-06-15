<?php
/**
 * Template Name: Contactme
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

	 <section class="main_crayons_image">
     
<h2 class="say_hello">SAY HELLO</h2>
        <div class="note_paper_image">

          <form class="form_div" action="contact-me" method="post">

          <div class="form">


                  
              <label for="name">NAME:</label>
                  <input type="text" class="input_name"  name="name"/><br>



              <label for="email">EMAIL:</label>
                  <input type="text" class="input_email" email="email"/><br>


              <label class="message_box" for="message">MESSAGE:</label>
                  <textarea name="message" class="input_message"></textarea></br>

                  <button class="send_button" type="submit">SEND
                  </button>
            </div>
          </form>


          
              
        
        </div>

  
   </section>

<?php get_footer(); ?>