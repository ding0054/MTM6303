<?php
/**
 * Post Page template 
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
    $featured_img_url = get_stylesheet_directory_uri()."/assets/images/page.jpg";
}

?>

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2> 
        <a href="<?php echo get_permalink() ?>"><?php echo get_the_title();?></a>
        </h2>
                <img class="img-responsive" src="<?php echo $featured_img_url;?>"><br>

        <div class="col-md-12">
            <!-- <?php the_post_thumbnail('medium_large') ?> -->
        </div>

        <p><?php the_excerpt(); ?></p>
      </div>
    