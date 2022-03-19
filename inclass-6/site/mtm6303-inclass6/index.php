<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Inclass6
 */

get_header(); ?>

      <div class="row tm-welcome-row">
        <div class="col-12 tm-page-cols-container">
        <?php get_sidebar(); ?>
          <div class="tm-page-col-right">
            <div
              class="tm-welcome-parallax"
              data-parallax="scroll"
              data-image-src="<?php echo get_stylesheet_directory_uri()
?>/img/blooming-bg.jpg"
            ></div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4 tm-pb-6">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-right">
            <h2 class="tm-text-secondary tm-mb-5">
              <?php echo get_the_title();?>
            </h2>

            <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <div class="entry-content-page tm-mb-6">
                    <?php the_content(); ?> <!-- Page Content -->
                </div><!-- .entry-content-page -->

            <?php
            endwhile; //resetting the page loop

            ?>

            <!-- <p class="tm-mb-6">
              Homepage main photo is provided by <strong>Moose Photos</strong> from <strong>Pexels</strong>. Next Level CSS Template is brought to you by Template Mo website. You can feel free to adapt it for your websites. No need to put a footer credit link. Please kindly spread a word about us. Thank you. If you have any question, feel free to contact us on Facebook page.
              
            </p>
            <p class="mb-0">
           	  Nullam nec dictum dolor. Sed ultricies purus nec suscipit vulputate. Fusce a massa eu orci
              vulputate varius. Praesent id felis ac erat elementum condimentum. Pellentesque a
              libero vitae nisi vestibulum tempor vitae vitae nulla. Praesent ut
              eleifend ligula, nec pretium erat.
            </p> -->
          </div>
        </div>
      </section>

      <!-- Call to Action -->
      <section class="row" id="tmCallToAction">
        <div class="col-12 tm-page-cols-container tm-call-to-action-col">
          <div class="tm-page-col-right">
            <div class="tm-call-to-action-box">
              <i class="fas fa-3x fa-rss-square tm-call-to-action-icon"></i>
              <div class="tm-call-to-action-text">
                <h3 class="tm-call-to-action-title">
                  Vivamus sollicitudin tellus
                </h3>
                <p class="tm-call-to-action-description">
                  Maecenas maximus tellus in dolor auctor tristique. Nam
                  hendrerit posuere laoreet. Aliquam erat volutpat. Nulla eros
                  est, imperdiet vel feugiat non, ullamcorper mattis nulla.
                </p>
                <form action="#" method="GET" class="tm-call-to-action-form">
                  <input type="email" name="email" placeholder="Email" class="tm-email-input" required />
                  <button type="submit" class="btn btn-primary">
                    Subscribe
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php get_footer(); ?>