<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package singlepress
 */
?>
<?php get_sidebar('footerfull'); ?>

	<!-- Start for footer-->
<footer id="copyright" class="highlight">
	<div class="head-icon">
    	<span class="gototop fa <?php echo esc_attr(get_theme_mod( 'footer_icon', 'fa-arrow-circle-o-up' ));?>"></span>
    </div>
	<div class="container text-center">
    	<p class="copyright-text">
        	<?php echo wp_kses_post(get_theme_mod( 'footer_copyright_text', sprintf('Copyright © %u, All Rights Reserved.', date('Y'))) ) ;
                ?>
        </p>
    </div>
</footer>
<!-- End for footer-->



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
