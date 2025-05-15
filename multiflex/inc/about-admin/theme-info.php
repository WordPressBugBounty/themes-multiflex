<?php
/**
 * Add theme page
 */
function multiflex_menu() {
	add_theme_page( esc_html__( 'MultiFlex Theme', 'multiflex' ), esc_html__( 'MultiFlex Theme', 'multiflex' ), 'edit_theme_options', 'multiflex-info', 'multiflex_theme_page_display' );
}
add_action( 'admin_menu', 'multiflex_menu' );

/**
 * Display About page
 */
function multiflex_theme_page_display() {
    require get_parent_theme_file_path( '/inc/about-admin/templates/theme-info.php' );
}

function multiflex_admin_plugin_notice() {
    if ( ! get_option( 'multiflex_notice_dismissed_v2' ) || ( time() - get_option( 'multiflex_notice_dismissed_v2' ) > 1 * MINUTE_IN_SECONDS ) ) {
        require get_parent_theme_file_path( '/inc/about-admin/templates/admin-plugin-notice.php' );
    }
}
add_action( 'admin_notices', 'multiflex_admin_plugin_notice' );

/**
 * Enqueue admin scripts and styles.
 */
function multiflex_admin_scripts() {
	
    wp_enqueue_style(
        'multiflex-admin-message-style',
        get_template_directory_uri() . '/assets/css/admin-style.css',
        array(),
        multiflex_file_version( '/assets/css/admin-style.css' )
    );
    
}
add_action( 'admin_enqueue_scripts', 'multiflex_admin_scripts' );

function multiflex_admin_notice_script() {
    ?>
    <script>
        jQuery(document).ready(function($){
            $(document).on('click', '#multiflex-admin-notice .notice-dismiss', function(){
                $.ajax({
                    url: ajaxurl,
                    data: {
                        action: 'flexverse_dismiss_custom_notice'
                    }
                });
            });
        });
    </script>
    <?php
}
add_action( 'admin_footer', 'multiflex_admin_notice_script' );

function flexverse_dismiss_custom_notice() {
    update_option( 'multiflex_notice_dismissed_v2', time() );
    wp_die();
}
add_action( 'wp_ajax_flexverse_dismiss_custom_notice', 'flexverse_dismiss_custom_notice' );

