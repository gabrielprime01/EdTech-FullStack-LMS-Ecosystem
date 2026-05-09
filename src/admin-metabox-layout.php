<?php
/**
 * Custom Meta Box para Gestão de Layout de Sidebar via Post Meta API
 */

add_action('add_meta_boxes', 'custom_register_layout_metabox');

function custom_register_layout_metabox() {
    $screens = array('post', 'page');
    foreach ($screens as $screen) {
        add_meta_box('custom_sidebar_layout', 'Layout da Sidebar', 'render_sidebar_layout_callback', $screen, 'normal', 'high');
    }
}

function render_sidebar_layout_callback($post) {
    wp_nonce_field(basename(__FILE__), 'custom_sidebar_layout_nonce');
    $current_layout = get_post_meta($post->ID, 'custom_sidebar_layout', true);

    $layouts = array(
        'left'  => 'Sidebar Esquerda',
        'right' => 'Sidebar Direita',
        'both'  => 'Ambas as Sidebars',
        'no'    => 'Sem Sidebar'
    );

    foreach ($layouts as $value => $label) {
        $checked = checked($current_layout, $value, false);
        echo "<label style='margin-right:15px;'><input type='radio' name='custom_sidebar_layout' value='{$value}' {$checked}> {$label}</label>";
    }
}

function save_sidebar_layout_data($post_id) {
    if (!isset($_POST['custom_sidebar_layout_nonce']) || !wp_verify_nonce($_POST['custom_sidebar_layout_nonce'], basename(__FILE__))) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['custom_sidebar_layout'])) {
        update_post_meta($post_id, 'custom_sidebar_layout', sanitize_text_field($_POST['custom_sidebar_layout']));
    }
}
add_action('save_post', 'save_sidebar_layout_data');