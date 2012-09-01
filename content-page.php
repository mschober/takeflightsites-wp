<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="post-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .post-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Take Flight | it's your time</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/plane-favicon.png" type="image/x-icon" />
</head>
<body>
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
                                <h2><a href="#">About Us</a></h2>
                                <p class="postmeta"></a></p>
                                <div class="entry">
                                   
                                    <p>At Take Flight we are dedicated to bringing you're small business into the 21st century.</p>
                                    <p>Under no circumstances can you use the template for websites with illegal or immoral (even if legal) content. This includes, but is not limited to pornography, obscenity, homosexuality, abortion, violence, drugs, gambling... <a href="#">more</a></p>
                                </div>
                            </div><!-- post -->
                            <div class="post">
                                <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
                                <p class="postmeta">Posted in <a href="#">Lorem ipsum</a> | Sep 19, 2019 | <a href="#">2 comments</a></p>
                                <div class="entry">
                                    <img class="left" src="images/img3.jpg" alt="" />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec dui quis urna sollicitudin sodales. Fusce laoreet, ligula et rhoncus volutpat, felis magna varius tortor, ac molestie diam lorem in lectus. Aliquam venenatis mollis est, a porttitor ipsum interdum nec. Vestibulum sed risus ac nulla viverra pharetra.</p>
                                    <p>Quisque congue lacus sed odio fermentum tincidunt. Proin vitae nulla velit. Cras consectetur commodo scelerisque. Curabitur leo nisl, blandit at tempus et, interdum at risus. Sed dui augue, pellentesque ac pulvinar id, malesuada eget diam. Integer elementum sem eget tortor faucibus id pellentesque lorem dignissim... <a href="#">more</a></p>
                                </div>
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
