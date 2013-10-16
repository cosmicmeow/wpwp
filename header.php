<?php
/**
 *
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: April 11, 2012
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
   <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'bootstrapwp' ), max( $paged, $page ) );

  ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=medium-dpi">

    <link rel="profile" href="http://gmpg.org/xfn/11" />


    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' );?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-57-precomposed.png">

  <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>  data-spy="scroll" data-target=".subnav" data-offset="50">

    <nav class="navbar navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"><img src="img/icon-list.png"></button>
        <a class="navbar-brand" href="http://vinylmint.com/new-site"><img src="http://vinylmint.com/new-site/wp-content/uploads/2013/09/Vlogo_sm.png"></a>
      </div>

      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="https://preview.vinylmint.com/">
              <img src="http://vinylmint.com/new-site/wp-content/uploads/2013/09/icon-contests.png"> Browse Contests
            </a>
          </li>

          <li>
            <a href="blog.html"><img src="http://vinylmint.com/new-site/wp-content/uploads/2013/09/icon-blog.png"> Blog
            </a>
          </li>

          <li>
            <a href="http://vinylmint.com/new-site/faq"><img src="http://vinylmint.com/new-site/wp-content/uploads/2013/09/icon-faq.png"> FAQ
            </a>
          </li>

          <li>
            <a href="http://vinylmint.com/new-site/contact"><img src="http://vinylmint.com/new-site/wp-content/uploads/2013/09/icon-contact.png"> Contact Us
            </a>
          </li>
        <!-- <li><a href="javascript:$.pageslide({ direction: 'left', href:'hiddenmenu.html' })"><img src="img/icon-list.png"></a></li> -->
        </ul>
      </div>

      </nav><!-- /.navbar fixed top -->
    <!-- End Header -->
      <div id="content-wrapper">
              <!-- Begin Template Content -->