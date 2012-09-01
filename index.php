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
			<?php get_sidebar(); ?>
                        <div class="clearing">&nbsp;</div>   
            </div></div></div><!-- main --><!-- main2 --><!-- main3 -->
            <div id="footer">
                <p>
			Copyright &copy; 2012, 
			<a href="http://www.takeflightsites.com">TakeFlightSites</a> | 
			<a href="http://www.webtemplateocean.com/">WebTemplateOcean</a> | 
			<a href="http://fotogrph.com/">Fotogrph</a> | 
			<a href="#">Privacy Policy</a>
			<?php do_action( 'twentyeleven_credits' ); ?> | 
                        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" 
				title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" 
				rel="generator">
				WordPress
			</a>
		</p>
            </div><!-- end footer -->
    </div></div><!-- page --><!-- page2 -->

<?php get_footer(); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

</body>
</html>
