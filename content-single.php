<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

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
            <div id="intro">
		<div id="intro-collapsed"></div>
	    </div>
            <div id="main"><div id="main2"><div id="main3">
                        <div id="content">
                            <div class="post">


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="post-meta">
			<?php twentyeleven_posted_on(); ?>
		</div><!-- .post-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="post-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			} elseif ( '' != $categories_list ) {
				$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			} else {
				$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( get_the_author_meta( 'description' ) && ( ! function_exists( 'is_multi_author' ) || is_multi_author() ) ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
		<div id="author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 68 ) ); ?>
			</div><!-- #author-avatar -->
			<div id="author-description">
				<h2><?php printf( __( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
				<div id="author-link">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyeleven' ), get_the_author() ); ?>
					</a>
				</div><!-- #author-link	-->
			</div><!-- #author-description -->
		</div><!-- #author-info -->
		<?php endif; ?>
	</footer><!-- .post-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
                            </div><!-- post -->
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
                <p>Copyright &copy; 2012, designed by <a href="#">Take Flight Sites</a> | <a href="http://www.webtemplateocean.com/">WebTemplateOcean</a> | <a href="http://fotogrph.com/">Fotogrph</a>
            </div>
    </div></div><!-- page --><!-- page2 -->
</body>
</html>
