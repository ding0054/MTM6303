<?php
/**
 * @package MTM6303finalplugin
 */
/*
Plugin Name: MTM6303finalplugin
Plugin URI: https://algonquincollege.com/
Description: This is a plugin for mtm6303 final
Version: 1.0.0
Author: Xiaoyu Ding
Author URI: https://algonquincollege.com/
License: GPLv2 or later
Text Domain: MTM6303finalplugin
*/
/**
 * Register Custom Post Type
 */
function mtm6303finalplugin_post_type() {

	$labels = array(
		'name'                  => _x( 'mtm6303finalslider', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'mtm6303finalslider', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'mtm6303Slider', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'mtm6303finalslider', 'text_domain' ),
		'description'           => __( 'mtm6303finalslider', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'mtm6303finalslider', $args );

}
add_action( 'init', 'mtm6303finalplugin_post_type', 0 );

/**
 * Register and enqueue Plugin Assets
 */
function mtm6303finalplugin_assets()
{
    if (!is_admin()) {
        wp_enqueue_style('mtm6303-slider', plugins_url('assets/mtm6303-slider.css', __FILE__), [], '1.0.0', false);
        wp_enqueue_script('mtm6303-slider-js', plugins_url('assets/mtm6303-slider.js', __FILE__), [], '1.0.0', true);
    }
}
add_action('init', 'mtm6303finalplugin_assets', 1);


/**
 * Get Slider Styles
 */
function get_slider_styles()
{
    $file_name = plugins_url('/assets/mtm6303-slider.css', __FILE__);
    // echo file_get_contents($file_name);
}


/**
 * Get Slider Scripts
 */
function get_slider_scripts()
{
    $file_name = plugins_url('/assets/mtm6303-slider.js', __FILE__);
    // echo file_get_contents($file_name);
}

/**
 * Build Pluign Slider
 */
function mtm6303finalplugin_build_slider($images = true)
{
    // wp_enqueue_style('custom-gallery');
    // wp_enqueue_script('custom-gallery');
    
    $args = array(
        'post_type' => 'mtm6303finalslider',
        'posts_per_page' => -1
    );
    $count = 0;
    $loop = new WP_Query($args); ?>
<!-- Slideshow container -->
<div class="slideshow-container">
<!-- the_post_thumbnail_caption(); -->
    <?php
        while ($loop->have_posts()) {
            $loop->the_post();
            $count++;
            $the_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);
           ?>
    <!-- Full-width slides/quotes -->
    <div class="mySlides">
    <?php
            if ($images && !empty($the_image_url)) {
                echo '<img title="'.get_the_title().'" src="' . $the_image_url[0] . '" alt="'.get_the_title().'">';
            } ?>
        <q><?php echo wp_strip_all_tags(get_the_content()); ?></q>
        <p> <?php echo get_the_title(); ?></p>
    </div>

    <?php
        } 
    ?>

    <!-- Next/prev buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
    <?php
    for ($i = 1; $i <= $count; $i++) {
        echo '<span class="dot" onclick="currentSlide('.$i.')"></span>';
    } ?>
</div>
<!-- Styles -->
<style>
<?php get_slider_styles() ?>
</style>
<!-- Scripts -->
<script>
<?php get_slider_scripts() ?>
</script>
<?php
}

/**
 * shortcode function for slider with images
 */
function mtm6303finalplugin_func($atts)
{
    return mtm6303finalplugin_build_slider();
}
// With Images
add_shortcode('mtm6303finalplugin_slider','mtm6303finalplugin_func');

/**
 * shortcode function for slider no images
 */
function mtm6303finalplugin_func_no_images($atts)
{
    return mtm6303finalplugin_build_slider(false);
}
// no Images
add_shortcode('mtm6303finalplugin_slider_no_image','mtm6303finalplugin_func_no_images');