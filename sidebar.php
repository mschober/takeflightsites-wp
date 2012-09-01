<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
<!--		<div id="secondary" class="widget-area" role="complementary">-->
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
		<div id="content">
			<div class="left-padded">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
			</div><!-- end left-padded -->
		</div><!-- end content -->
	<!-- 	</div>#secondary .widget-area -->
<?php endif; ?>
