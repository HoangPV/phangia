<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="footer_area">
        <?php get_template_part( 'template-parts/footer/footer-main' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- Back To Top -->
<a href="#" class="cd-top cd-is-visible">Back To Top</a>
<style type="text/css">
a.cd-top.cd-is-visible {
    visibility: visible;
    opacity: 1;
}
a.cd-top, a.cd-top:visited, a.cd-top:hover {
    color: #CCCCCC;
    text-decoration: none;
}
a.cd-top.cd-is-visible, a.cd-top.cd-fade-out, .no-touch a.cd-top:hover {
    -webkit-transition: opacity .3s 0s, visibility 0s 0s;
    -moz-transition: opacity .3s 0s, visibility 0s 0s;
    transition: opacity .3s 0s, visibility 0s 0s;
}
a.cd-top {
display: inline-block;
height: 40px;
width: 40px;
position: fixed;
bottom: 10px;
right: 10px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
/* image replacement properties */
overflow: hidden;
text-indent: 100%;
white-space: nowrap;
background: #000 url("<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/cd-top-arrow.svg") no-repeat center 50%;
visibility: hidden;
opacity: 0;
-webkit-transition: opacity .3s 0s, visibility 0s .3s;
-moz-transition: opacity .3s 0s, visibility 0s .3s;
transition: opacity .3s 0s, visibility 0s .3s;
}
a.cd-top.cd-is-visible, a.cd-top.cd-fade-out, .no-touch a.cd-top:hover {
-webkit-transition: opacity .3s 0s, visibility 0s 0s;
-moz-transition: opacity .3s 0s, visibility 0s 0s;
transition: opacity .3s 0s, visibility 0s 0s;
}

a.cd-top, a.cd-top:visited, a.cd-top:hover {
color: #CCCCCC;
text-decoration: none;
}

a.cd-top.cd-is-visible {
/* the button becomes visible */
visibility: visible;
opacity: 1;
}
a.cd-top.cd-fade-out {
/* if the user keeps scrolling down, the button is out of focus and becomes less visible */
opacity: 1;
}
</style>


</body>
</html>
