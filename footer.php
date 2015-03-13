<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package wordsmiths
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	<!--</div> close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<!--<div class="container">-->
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
                                    <ul>
                                        <li>
                                            <?php if ( get_theme_mod('facebook-link')) {  ?>
                                            <a href="<?php echo (get_theme_mod('facebook-link')); ?>" class="fa fa-facebook"></a>
                                            <?php } else { ?>
                                            <a href="#" class="fa fa-facebook"></a>
                                            <?php } ?>
                                        </li>
                                        <li><?php if ( get_theme_mod('google-link')) {  ?>
                                            <a href="<?php echo (get_theme_mod('google-link')); ?>" class="fa fa-google-plus"></a>
                                            <?php } else { ?>
                                            <a href="#" class="fa fa-google-plus"></a>
                                            <?php } ?>
                                        </li>
                                        <li><?php if ( get_theme_mod('twitter-link')) {  ?>
                                            <a href="<?php echo (get_theme_mod('twitter-link')); ?>" class="fa fa-twitter"></a>
                                            <?php } else { ?>
                                            <a href="#" class="fa fa-twitter"></a>
                                            <?php } ?>
                                        </li>
                                    </ul>
					<ul>
                                        <li class="glyphicon glyphicon-copyright-mark"></li>
                                        <li><p class="footer-copyright">&nbsp;Copyright 2015. WordSmiths Team.</p></li>
                                    </ul>
				</div><!-- close .site-info -->

			</div>
		</div>
	<!--</div> close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>
                        </div>
                        </DIV>
</body>
</html>