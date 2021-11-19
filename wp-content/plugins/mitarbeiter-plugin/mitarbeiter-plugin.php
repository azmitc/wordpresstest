<?php
/**
 * Plugin Name: Mitarbeiterr Plugin
 * Author: Azmi Ghis
 * Description: Custom Mitarbeiter Plugin
 * Version: 0.1.0
 * text-domain: prefix-plugin-name
*/
function create_mitarbeiter_cpt() {

    $labels = array(
        'name' => _x( 'Mitarbeiterr', 'Post Type General Name', 'Mitarbeiterr' ),
        'singular_name' => _x( 'Mitarbeiterr', 'Post Type Singular Name', 'Mitarbeiterr' ),
        'menu_name' => _x( 'Mitarbeiterr', 'Admin Menu text', 'Mitarbeiterr' ),
        'name_admin_bar' => _x( 'Mitarbeiterr', 'Add New on Toolbar', 'Mitarbeiterr' ),
        'archives' => __( 'Archivi Mitarbeiterr', 'Mitarbeiterr' ),
        'attributes' => __( 'Attributi delle Mitarbeiterr', 'Mitarbeiterr' ),
        'parent_item_colon' => __( 'Genitori Mitarbeiterr:', 'Mitarbeiterr' ),
        'all_items' => __( 'All Mitarbeiterr', 'Mitarbeiterr' ),
        'add_new_item' => __( 'Aggiungi nuova Mitarbeiterr', 'Mitarbeiterr' ),
        'add_new' => __( 'New', 'Mitarbeiterr' ),
        'new_item' => __( 'Mitarbeiterr redigere', 'Mitarbeiterr' ),
        'edit_item' => __( 'Modify Mitarbeiterr', 'Mitarbeiterr' ),
        'update_item' => __( 'Aggiorna Mitarbeiterr', 'Mitarbeiterr' ),
        'view_item' => __( 'View Mitarbeiterr', 'Mitarbeiterr' ),
        'view_items' => __( 'View Mitarbeiterr', 'Mitarbeiterr' ),
        'search_items' => __( 'Search Mitarbeiterr', 'Mitarbeiterr' ),
        'not_found' => __( 'Mitarbeiterr Not found.', 'Mitarbeiterr' ),
        'not_found_in_trash' => __( 'Mitarbeiter not found in trash.', 'Mitarbeiterr' ),
        'featured_image' => __( 'featured_image', 'Mitarbeiterr' ),
        'set_featured_image' => __( 'Set_featured_image', 'Mitarbeiterr' ),
        'remove_featured_image' => __( 'Remove_featured_image', 'Mitarbeiterr' ),
        'use_featured_image' => __( 'Use_featured_image', 'Mitarbeiterr' ),
        'insert_into_item' => __( 'Insert_into_item', 'Mitarbeiterr' ),
        'uploaded_to_this_item' => __( 'Uploaded_to_this_item Mitarbeiterr', 'Mitarbeiterr' ),
        'items_list' => __( 'Items_list Mitarbeiterr', 'Mitarbeiterr' ),
        'items_list_navigation' => __( 'Items_list_navigation Mitarbeiterr', 'Mitarbeiterr' ),
        'filter_items_list' => __( 'Filter_items_list Mitarbeiterr', 'Mitarbeiterr' ),
    );
    $args = array(
        'label' => __( 'mitarbeiterr', 'mitarbeiterr' ),
        'description' => __( 'mitarbeiterr', 'mitarbeiterr' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array(),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'auto', $args );

}
add_action( 'init', 'create_mitarbeiter_cpt', 0 );

add_action( 'admin_init', 'my_admin' );

function my_admin() {
    add_meta_box( 
        'mitarbeiter_review_meta_box',
        'Information Mitarbeiter',
        'display_mitarbeiter_review_meta_box',
        'auto',
        'normal',
        'high'
    );
}

function display_mitarbeiter_review_meta_box() {
    ?>
    <table>
        <tr>
            <td style="width: 50%">UIID</td>
            <td><input type="text" size="40" name="id" value="<?php echo get_post_meta( get_the_ID(), 'id', true ); ?>"  /></td>
        </tr>
        <tr>
            <td style="width: 50%">Name</td>
            <td><input type="text" size="40" name="name" value="<?php echo get_post_meta( get_the_ID(), 'name', true ); ?>"  /></td>
        </tr>
        <tr>
            <td style="width: 50%">Vorname</td>
            <td><input type="text" size="40" name="vorname" value="<?php echo get_post_meta( get_the_ID(), 'vorname', true ); ?>"  /></td>       
        </tr>
        <tr>
            <td style="width: 50%">Telephon</td>
            <td><input type="text" size="40" name="telephon" value="<?php echo get_post_meta( get_the_ID(), 'telephon', true ); ?>"  /></td>
        </tr>
        <tr>
            <td style="width: 50%">Mail</td>
            <td><input type="text" size="40" name="mail" value="<?php echo get_post_meta( get_the_ID(), 'mail', true ); ?>"  /></td>       
        </tr>
        <tr>
            <td style="width: 50%">bildurl</td>
            <td><input type="text" size="40" name="bildurl" value="<?php echo get_post_meta( get_the_ID(), 'bildurl', true ); ?>"  /></td>       
        </tr>
    </table>
    <?php
}

add_action( 'wp', 'insert_into_auto_cpt' );
function savecustomfields($post_id){
    $name          =    $_POST['name'];
    $id        =    get_the_id();
    $vorname     =  $_POST['vorname'];
    global $wpdb;
$wpdb-> insert($wpdb->prefix . 'ecommerce_mitarbeiter',['id'->$id ,'name' -> $name ,'vorname' -> $vorname ]);
}
add_action( 'save post', 'savecustomfields');
function check_for_similar_meta_ids() {
    $id_arrays_in_cpt = array();

    $args = array(
        'post_type'      => 'auto',
        'posts_per_page' => -1,
    );

    $loop = new WP_Query($args);
    while( $loop->have_posts() ) {
        $loop->the_post();
        $id_arrays_in_cpt[] = get_post_meta( get_the_ID(), 'id', true );
    }

    return $id_arrays_in_cpt;
}

function query_mitarbeiter_table( $mitarbeiter_available_in_cpt_array ) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'ecommerce_mitarbeiter';

    if ( NULL === $mitarbeiter_available_in_cpt_array || 0 === $mitarbeiter_available_in_cpt_array || '0' === $mitarbeiter_available_in_cpt_array || empty( $mitarbeiter_available_in_cpt_array ) ) {
        $results = $wpdb->get_results("SELECT * FROM $table_name");
        return $results;
    } else {
        $ids = implode( ",", $mitarbeiter_available_in_cpt_array );
        $sql = "SELECT * FROM $table_name WHERE id NOT IN ( $ids )";
        $results = $wpdb->get_results( $sql );
        return $results;
    }
}



function insert_into_auto_cpt() {

    $mitarbeiter_available_in_cpt_array = check_for_similar_meta_ids();
    $database_results = query_mitarbeiter_table( $mitarbeiter_available_in_cpt_array );

    if ( NULL === $database_results || 0 === $database_results || '0' === $database_results || empty( $database_results ) ) {
        return;
    }

    foreach ( $database_results as $result ) {
        $mitarbeiter_model = array(
            'post_title' => wp_strip_all_tags( $result->name . ' ' . $result->vorname . ' ' . $result->telephon . ' ' . $result->mail . ' ' . $result->bildurl ),
            'meta_input' => array(
                'id'        => $result->id,
                'name'        => $result->name,
                'vorname'        => $result->vorname,
                'telephon'        => $result->telephon,
                'mail'           => $result->mail,
                'bildurl'           => $result->bildurl,
            ),
            'post_type'   => 'auto',
            'post_status' => 'publish',
        );
        wp_insert_post( $mitarbeiter_model );
    }
}