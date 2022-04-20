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

<?php get_template_part( 'template-parts/page/content', 'page-header' );
?>
<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <h1> <?php echo get_the_title();?></h1>
                     </div>   
                        <p class="section-container-spacer">
                            <?php the_content(); ?>
                        </p>
               </div>
            </div>
        </div>
    </div>
</div>