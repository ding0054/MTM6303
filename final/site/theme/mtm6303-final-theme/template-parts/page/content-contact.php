<?php
/**
 * contact Page template 
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Final
 */
?>

<?php
// The user should be allowed to upload the Header image via WordPress Admin through Featured Image
$featured_img_url = get_the_post_thumbnail_url();
if(empty($featured_img_url)){
    $featured_img_url = get_stylesheet_directory_uri()."/assets/images/contact.jpg";
}

?>

      <div class="container">
        <div class="row">
            <!-- header image -->
            <div class="col-12 tm-page-cols-container">
                <img class="img-responsive" src="<?php echo $featured_img_url;?>">
            </div>

<section class="row tm-pt-4 tm-pb-6">
    <div class="col-12 tm-page-cols-container">
        <div class="tm-page-col-left">
            <div class="tm-contact-container tm-mb-6">
               
                <div class="tm-location-container tm-mb-3">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="300" height="300" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=<?php echo urlencode(strip_tags(mtm6303final_get_dynamic_sidebar('mtm6303final-sidebar-location'))) ?>Algonquin%20College&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                            <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 300px;
                                width: 100%;
                            }
                            </style><a href="https://www.embedgooglemap.net">google maps iframe options</a>
                            <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 300px;
                                width: 100%;
                            }
                            </style>
                        </div>
                    </div>
                </div>

                 <div class="tm-address-container">
                    <h2 class="tm-text-secondary tm-mb-6">Address</h2>
                    <address>
                        <p>
                        <?php echo mtm6303final_get_dynamic_sidebar('mtm6303final-sidebar-location')?>    
                        </p>
                     </address>
                </div>

            </div>
        </div>


        <div class="tm-page-col-right">
            <h2 class="tm-text-secondary tm-mb-5">
                <?php echo get_the_title();?>
            </h2>

            <div class="entry-content-page tm-mb-6">
                <?php the_content(); ?>
                <!-- Page Content -->
            </div><!-- .entry-content-page -->
        </div>
    </div>
</section>

