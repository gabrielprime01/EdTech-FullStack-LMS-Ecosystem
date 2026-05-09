<?php
/**
 * Motor de Queries Customizadas e Manipulação de Categorias
 */

function get_custom_category_list(){
    $categories = get_categories(array(
        'hide_empty' => 0,
        'exclude' => 1 
    ));

    $category_lists = array();
    $category_lists[''] = '-- Selecione --';
    foreach($categories as $category) {
        $category_lists[$category->term_id] = $category->name;
    }
    return $category_lists;
}

function render_header_slider_logic(){
    $slider_cat = get_theme_mod('custom_slider_category_setting');
    
    if($slider_cat){
        $args = array(
            'post_type' => 'post',
            'cat' => $slider_cat,
            'order' => 'DESC',
            'posts_per_page' => 5
        );
        
        $query = new WP_Query($args);
        return ($query->have_posts()) ? $query : null;
    }
    return null;
}