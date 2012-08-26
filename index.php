<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

    <div id="page"><div id="page2">
            <div id="header">
                <h1><a href="index.html">Take Flight</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
		    <li><a href="pricing.html">Pricing</a></li>
                </ul>
            </div>
            <div id="intro"><div id="intro2">

            </div></div> 
            <div id="main"><div id="main2"><div id="main3">
                        <div id="content">
			<?php if ( have_posts() ) : ?>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
                        </div><!-- content -->
                        <div id="sidebar">
                            <h2>Quisque luctus</h2>
                            <ul>
                                <li><a href="#">Fusce laoreet, ligula et rhoncus</a></li>
                                <li><a href="#">Adipiscing gravida pulvinar eget</a></li>
                                <li><a href="#">Cras consectetur commodo</a></li>
                                <li><a href="#">Vulputate aliquam ipsum dictum</a></li>
                                <li><a href="#">Vestibulum imperdiet accumsan</a></li>
                            </ul>
                            <h2>Integer rhoncus</h2>
                            <div class="boxtxt">
                                <p>Mauris sollicitudin tincidunt magna vitae semper. Curabitur ut pharetra quam. Integer rhoncus convallis urna vitae mattis. Sed pharetra massa ac metus fermentum et iaculis enim accumsan.</p>
                            </div>
                            <h2>Mauris sagittis</h2>
                            <ul>
                                <li><a href="#">Suspendisse faucibus purus</a></li>
                                <li><a href="#">Tincidunt nec accumsan</a></li>
                                <li><a href="#">Fusce laoreet, ligula et rhoncus</a></li>
                                <li><a href="#">Adipiscing gravida pulvinar eget</a></li>
                                <li><a href="#">Cras consectetur commodo</a></li>
                            </ul>
                        </div><!-- sidebar -->
                        <div class="clearing">&nbsp;</div>   
            </div></div></div><!-- main --><!-- main2 --><!-- main3 -->
            <div id="footer">
                <p>Copyright &copy; 2012, designed by <a href="http://www.webtemplateocean.com/">WebTemplateOcean.com</a>, photos from <a href="http://fotogrph.com/">Fotogrph.com</a> | <a href="#">Privacy Policy</a></p>
            </div>
    </div></div><!-- page --><!-- page2 -->


			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>
</html>
