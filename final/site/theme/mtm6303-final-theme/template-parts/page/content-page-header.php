<?php
/**
 * content Page header template 
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

<div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="<?php echo $featured_img_url;?>">
            </div>
        </div>
    </div>
</div>