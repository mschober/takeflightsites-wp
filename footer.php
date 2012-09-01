<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

</div><?php if( is_home() ) echo "</div>"; ?></div><!-- main --><!-- main2 --><!-- main3 -->
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

    <footer id="colophon" role="contentinfo">

            <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with three columns of widgets.
                 */
                if ( ! is_404() )
                    get_sidebar( 'footer' );
            ?>

            <div id="site-generator">
            </div>
    </footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
