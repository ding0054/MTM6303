<?php
/**
 * Front Page template 
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
    $featured_img_url = get_stylesheet_directory_uri()."/assets/images/img-home.jpg";
}

?>
<div class="white-text-container background-image-container" style="background-image: url('<?php echo $featured_img_url; ?>')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1><?php echo get_the_title();?></h1>
              
                <div class="entry-content-page tm-mb-6">
                    <?php the_content();?>
                </div>
            </div>

        </div>
    </div>
</div>
