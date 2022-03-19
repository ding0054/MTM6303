<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage MTM6303_Inclass6
 * @since MTM6303 Inclass6 1.0
 */
?>

<!-- Page footer -->
<footer class="row tm-page-footer">
        <p class="col-12 tm-copyright-text mb-0">
          Copyright &copy; <?php echo date('Y'); ?> Next Level Company... Designed by
          <a href="https://fb.com/templatemo" rel="nofollow" class="tm-copyright-link">Template Mo</a>
        </p>
      </footer>
    </div>

    <script src="<?php echo get_stylesheet_directory_uri()
?>/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()
?>/js/parallax.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()
?>/js/bootstrap.min.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>