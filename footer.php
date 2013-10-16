<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: February 4, 2012
 */
?>
    <!-- End Template Content -->

</div><!--/#content-wrapper -->
      <footer>
<div class="container">
      <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
          <?php
    if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-content");
?>
    </div> <!-- /container -->
       </footer>

       <!-- Neccessary scripts added -->
       <script src="js/jquery.js"></script>
	   <script src="js/bootstrap.min.js"></script>
	   <script src="js/holder.js"></script>
<?php wp_footer(); ?>

  </body>
</html>