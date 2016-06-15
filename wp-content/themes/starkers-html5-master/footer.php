<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	


<footer class="row container-fluid" id="footer">

            <div class="col-md-8" id="say_hello">
                <p class="contact_intro">Dont forget to <span class="contact_link"><a class="mail_to_link" href="mailto:ahdesigns@outlook.com"> ...say hello! </a></span><span class="glyphicon glyphicon-envelope" id="envelope_icon" title="Email me!"></span></p>

            </div>
  

            <div class="col-md-4" id="social_networks">

                <ul>

                    <li><p><a  href="https://github.com/AH-Designs" title="My Git Hub Account"><img id="github_icon" src="<?php bloginfo('template_directory'); ?>/images/github.png" title="My Git Hub Account"/></a> <a class="github_text"  href="https://github.com/AH-Designs"> AH Designs:  Github!</a></p></li>

                    <li class="twitter"><p><a href="https://twitter.com/ah_designs_"><img class="twitter_icon" title="My Twitter Account" src="<?php bloginfo('template_directory'); ?>/images/twitter.png"/> </a><a class="twitter_text" href="https://twitter.com/ah_designs_">Follow me on Twitter!</a> </p> </li>

                </ul>
            </div>
</footer>
</div>

	

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>




  










</body>
</html>