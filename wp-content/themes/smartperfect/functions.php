<?php
 /**
 * smartData functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage smartData
 * @since 1.0
 */


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function twentyseventeen_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'twentyseventeen' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Feature 1', 'twentyseventeen' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Feature 2', 'twentyseventeen' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Feature 3', 'twentyseventeen' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Feature 4', 'twentyseventeen' ),
        'id'            => 'sidebar-5',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'Services Feature 1', 'twentyseventeen' ),
        'id'            => 'sidebar-7',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Services Feature 2', 'twentyseventeen' ),
        'id'            => 'sidebar-8',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Services Feature 3', 'twentyseventeen' ),
        'id'            => 'sidebar-9',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Services Feature 4', 'twentyseventeen' ),
        'id'            => 'sidebar-10',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));


    register_sidebar( array(
        'name'          => __( 'Footer contract', 'twentyseventeen' ),
        'id'            => 'sidebar-6',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'New Sidebar', 'twentyseventeen' ),
        'id'            => 'sidebar-7',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'twentyseventeen_widgets_init' );

function rest_posts_per_page( $args, $request ) {
    $max = max( (int)$request->get_param( 'per_page' ), 100 );
    $args['posts_per_page'] = $max;
    return $args;
}
add_filter( 'rest_post_query', 'rest_posts_per_page', 10, 2 );

/* CUSTOM FUNCTION TO SEND EMAIL TO USER FOR CASE STUDY LINK */

add_action('wp_head', 'plugin_set_ajax_url');
function plugin_set_ajax_url() {
    ?>
    <script type="text/javascript">
        var ajax_object = {};
        ajax_object.ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
    <?php
}

/* Dynamic location  */
function form_with_pipes_handler($formName, $fieldName, $newFieldName, &$formData)
{
    if ($formData &&
        $formName == $formData->title &&
        property_exists($formData, 'WPCF7_ContactForm') &&
        method_exists($formData->WPCF7_ContactForm, 'form_scan_shortcode')) {

        $scanned_form_tags = $formData->WPCF7_ContactForm->form_scan_shortcode();
        $emailSelected = $formData->posted_data[$fieldName];
        if (is_array($emailSelected) && count($emailSelected) == 1) {
            $emailSelected = $emailSelected[0];
        }
        $valueSelected = null;
        foreach ($scanned_form_tags as $tag) {
            if ($tag['name'] == $fieldName) {
                foreach ($tag['raw_values'] as $rawValue) {
                    // value|email
                    $valuesArray = explode('|', $rawValue);
                    if (count($valuesArray) == 2 && $valuesArray[1] == $emailSelected) {
                        $valueSelected = $valuesArray[0];
                        break;
                    }
                }
            }
            if ($valueSelected != null) {
                break;
            }
        }
        if ($valueSelected != null) {
            $formData->posted_data[$fieldName] = $valueSelected;
            $formData->posted_data[$newFieldName] = $emailSelected;
        }
    }
    return $formData;
}

function location_form_handler($formData) // Use a different function name for each form
{
    $formName = 'Join us form'; // change this to your form's name
    $fieldName = 'location'; // change this to your field's name
    $newFieldName = $fieldName . '_email';
    return form_with_pipes_handler($formName, $fieldName, $newFieldName, $formData);
}
add_filter('cfdb_form_data', 'location_form_handler'); // ensure 2nd param matches above function name


add_action( 'set_comment_cookies', function( $comment, $user ) {
    setcookie( 'ta_comment_wait_approval', '1' );
}, 10, 2 );

add_filter( 'comment_post_redirect', function( $location, $comment ) {
    $location = get_permalink( $comment->comment_post_ID ) . '#wait_approval';
    return $location;
}, 10, 2 );

/* Code to redirect 404 to home page  */
function redirect_404s() {
    if(is_404()) {
        wp_redirect(home_url(), '301');
    }
}
add_action('wp_enqueue_scripts', 'redirect_404s');

/**
 * Replace # with js
 * @param string $menu_item item HTML
 * @return string item HTML
 */
function wpse_226884_replace_hash($menu_item) {
    if (strpos($menu_item, 'href="#"') !== false) {
        $menu_item = str_replace('href="#"', 'href="javascript:void(0);"', $menu_item);
    }
    return $menu_item;
}
remove_filter('term_description','wpautop');







add_theme_support('post-thumbnails');



function register_my_menus() {
    register_nav_menus(
        array(
            'new-homepage-menu' => __('New Homepage Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

/****registering widgets******/
register_sidebar( array(
    'name'          => __( 'Footer Section One', 'textdomain' ),
    'id'            => 'footer-sidebar-1',
    'description'   => __( 'Footer widget area for section one', 'textdomain' ),
    'before_widget' => '<div class="widget footer-widget-one %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Footer Section Two', 'textdomain' ),
    'id'            => 'footer-sidebar-2',
    'description'   => __( 'Footer widget area for section two', 'textdomain' ),
    'before_widget' => '<div class="widget footer-widget-two %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Footer Section Three', 'textdomain' ),
    'id'            => 'footer-sidebar-3',
    'description'   => __( 'Footer widget area for section three', 'textdomain' ),
    'before_widget' => '<div class="widget footer-widget-three %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );
register_sidebar( array(
    'name'          => __( 'Copyright text', 'textdomain' ),
    'id'            => 'copyright',
    'description'   => __( 'Add text here to appear in your copyright.', 'textdomain' ),
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );



function enqueue_jquery_validation() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    
    // Enqueue jQuery Validation Plugin
    wp_enqueue_script('jquery-validation', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js', array('jquery'), '1.19.5', true);
}
add_action('wp_enqueue_scripts', 'enqueue_jquery_validation');




add_filter( 'single_template_hierarchy', 'my_single_hierarchy' );
function my_single_hierarchy( $templates ) {
    if ( ! is_singular( 'post' ) ) {
        return $templates;
    }
    $new_templates = [];
    foreach ( get_the_category( get_queried_object_id() ) as $category ) {
        $new_templates[] = "single-{$category->slug}.php";
    }
    return [
    ...$new_templates,
    ...$templates
    ];
}


function set_featured_image_alt( $attr, $attachment ) {
    if ( ! isset( $attr['alt'] ) || empty( $attr['alt'] ) ) {
        $attr['alt'] = get_the_title( $attachment->ID );
    }
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'set_featured_image_alt', 10, 2 );

add_action('init', function() {
    $args = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'posts_per_page' => -1,
        'post_status'    => 'inherit',
        'meta_query'     => array(
            array(
                'key'     => '_wp_attachment_image_alt',
                'compare' => 'NOT EXISTS',
            ),
        ),
    );
    $images = get_posts($args);

    foreach ($images as $image) {
        $title = get_the_title($image->ID);
        update_post_meta($image->ID, '_wp_attachment_image_alt', $title);
    }
});

function limit_title_length($title, $length = 50, $more = '...') {
    $title = strip_tags($title); // Remove any HTML tags
    if (strlen($title) > $length) {
        $title = substr($title, 0, $length) . $more; // Limit characters and add ellipsis
    }
    return $title;
}
