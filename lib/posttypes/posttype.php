<?

namespace IMAGA\Theme\Posttype\POSTTYPE;

/**
 * POSTTYPE Post Type
 */
function create_post_type_posttype() {

  $labels = array(
    'name'                  => _x( 'POSTTYPE', 'POSTTYPE General Name', 'imaga' ),
    'singular_name'         => _x( 'POSTTYPE', 'POSTTYPE Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'POSTTYPE', 'imaga' ),
    'description'           => __( 'Posttype description', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'taxonomy' ), // Add taxonomies
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 70, // 5:below posts, 15:below links, 20:below pages, 25:below comments, 60:below first seperator, 65:below plugins, 70:below users, 75:below tools, 80:below settings, 100:below second seperator
    'menu_icon'             => 'dashicons-businessman',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',// 'page' or 'post'. Change when needed.
  );

  // Registering the post type
  register_post_type( 'posttype', $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_post_type_posttype' );
